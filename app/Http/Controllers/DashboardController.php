<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use App\Models\Wallet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $currentMonth = now()->month;
        $currentYear = now()->year;

        $wallets = Wallet::all();

        // Totals (Current Month)
        $totalIncome = Income::whereMonth('date', $currentMonth)->whereYear('date', $currentYear)->sum('amount');
        $totalExpense = Expense::whereMonth('date', $currentMonth)->whereYear('date', $currentYear)->sum('total_amount');
        $balance = $totalIncome - $totalExpense;

        // Recent Activity (Current Month - Merge 5 latest from each or fetch union)
        $latestIncomes = Income::whereMonth('date', $currentMonth)->whereYear('date', $currentYear)
            ->latest('date')->take(5)->get()->map(function ($item) {
                $item->type = 'income';
                return $item;
            });

        $latestExpenses = Expense::whereMonth('date', $currentMonth)->whereYear('date', $currentYear)
            ->latest('date')->take(5)->get()->map(function ($item) {
                $item->type = 'expense';
                return $item;
            });

        $recentActivity = $latestIncomes->merge($latestExpenses)->sortByDesc('date')->take(10);

        // Chart Data: Monthly Trend (Keep Annual for Context)
        $monthlyIncomes = Income::selectRaw('MONTH(date) as month, SUM(amount) as total')
            ->whereYear('date', $currentYear)
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $monthlyExpenses = Expense::selectRaw('MONTH(date) as month, SUM(total_amount) as total')
            ->whereYear('date', $currentYear)
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        // Fill 12 months
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $dataIncome = [];
        $dataExpense = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataIncome[] = (float)($monthlyIncomes[$i] ?? 0);
            $dataExpense[] = (float)($monthlyExpenses[$i] ?? 0);
        }

        // Chart Data: Expense Categories (Top 5 - Current Month)
        $categoryStats = Expense::selectRaw('category, SUM(total_amount) as total')
            ->whereMonth('date', $currentMonth)
            ->whereYear('date', $currentYear)
            ->groupBy('category')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        $categoryLabels = $categoryStats->pluck('category');
        $categoryTotals = $categoryStats->pluck('total')->map(fn($val) => (float)$val);

        // Chart Data: Daily Expenses (Current Month)
        $daysInMonth = now()->daysInMonth;
        $dailyExpensesRaw = Expense::selectRaw('DATE(date) as day, SUM(total_amount) as total')
            ->whereMonth('date', $currentMonth)
            ->whereYear('date', $currentYear)
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('total', 'day');

        $dailyLabels = [];
        $dailyTotals = [];
        for ($i = 1; $i <= $daysInMonth; $i++) {
            $date = \Carbon\Carbon::createFromDate($currentYear, $currentMonth, $i)->format('Y-m-d');
            $dailyLabels[] = $i;
            $dailyTotals[] = (float)($dailyExpensesRaw[$date] ?? 0);
        }

        // Chart Data: Income Sources (Top 5 - Current Month)
        $incomeStats = Income::selectRaw('source, SUM(amount) as total')
            ->whereMonth('date', $currentMonth)
            ->whereYear('date', $currentYear)
            ->groupBy('source')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        $incomeLabels = $incomeStats->pluck('source');
        $incomeTotals = $incomeStats->pluck('total')->map(fn($val) => (float)$val);

        // Budgets
        $budgets = \App\Models\Budget::all();
        // Calculate progress for dashboard
        foreach ($budgets as $budget) {
            $budget->spent_amount = $budget->spent_amount;
        }

        return view('dashboard', compact(
            'totalIncome',
            'totalExpense',
            'balance',
            'recentActivity',
            'months',
            'dataIncome',
            'dataExpense',
            'categoryLabels',
            'categoryTotals',
            'dailyLabels',
            'dailyTotals',
            'incomeLabels',
            'incomeLabels',
            'incomeTotals',
            'wallets',
            'budgets'
        ));
    }
}
