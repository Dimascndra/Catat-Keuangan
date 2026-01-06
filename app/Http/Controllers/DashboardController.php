<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $currentMonth = $request->input('month', session('global_month', now()->month));
        $currentYear = $request->input('year', session('global_year', now()->year));
        $walletId = $request->input('wallet_id', session('global_wallet_id'));

        session([
            'global_month' => $currentMonth,
            'global_year' => $currentYear,
            'global_wallet_id' => $walletId
        ]);

        $wallets = Wallet::all();

        // Base Queries
        $incomeQuery = Income::whereMonth('date', $currentMonth)->whereYear('date', $currentYear);
        $expenseQuery = Expense::whereMonth('date', $currentMonth)->whereYear('date', $currentYear);

        if ($walletId) {
            $incomeQuery->where('wallet_id', $walletId);
            $expenseQuery->where('wallet_id', $walletId);
        }

        // Totals (Current Month)
        $totalIncome = (clone $incomeQuery)->sum('amount');
        $totalExpense = (clone $expenseQuery)->sum('total_amount');
        $balance = $totalIncome - $totalExpense;

        // Recent Activity
        $latestIncomes = (clone $incomeQuery)->latest('date')->take(5)->get()->map(function ($item) {
            $item->type = 'income';
            return $item;
        });

        $latestExpenses = (clone $expenseQuery)->latest('date')->take(5)->get()->map(function ($item) {
            $item->type = 'expense';
            return $item;
        });

        $recentActivity = $latestIncomes->merge($latestExpenses)->sortByDesc('date')->take(10);

        // Chart Data: Monthly Trend
        $trendIncomeQuery = Income::selectRaw('MONTH(date) as month, SUM(amount) as total')
            ->whereYear('date', $currentYear)
            ->groupBy('month');

        $trendExpenseQuery = Expense::selectRaw('MONTH(date) as month, SUM(total_amount) as total')
            ->whereYear('date', $currentYear)
            ->groupBy('month');

        if ($walletId) {
            $trendIncomeQuery->where('wallet_id', $walletId);
            $trendExpenseQuery->where('wallet_id', $walletId);
        }

        $monthlyIncomes = $trendIncomeQuery->pluck('total', 'month')->toArray();
        $monthlyExpenses = $trendExpenseQuery->pluck('total', 'month')->toArray();

        // Fill 12 months
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $dataIncome = [];
        $dataExpense = [];

        for ($i = 1; $i <= 12; $i++) {
            $dataIncome[] = (float)($monthlyIncomes[$i] ?? 0);
            $dataExpense[] = (float)($monthlyExpenses[$i] ?? 0);
        }

        // Chart Data: Expense Categories (Top 5)
        $categoryStats = (clone $expenseQuery)->selectRaw('category, SUM(total_amount) as total')
            ->groupBy('category')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        $categoryLabels = $categoryStats->pluck('category');
        $categoryTotals = $categoryStats->pluck('total')->map(fn($val) => (float)$val);

        // All Category Stats for Table (Grouped with Details)
        $allCategoryStats = (clone $expenseQuery)->orderBy('date', 'desc')
            ->get()
            ->groupBy('category')
            ->map(function ($items, $category) {
                return (object) [
                    'category' => $category,
                    'total' => $items->sum('total_amount'),
                    'expenses' => $items
                ];
            })
            ->sortByDesc('total');

        // Chart Data: Daily Expenses
        $daysInMonth = Carbon::createFromDate($currentYear, $currentMonth, 1)->daysInMonth;
        $dailyExpensesRaw = (clone $expenseQuery)->selectRaw('DATE(date) as day, SUM(total_amount) as total')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('total', 'day');

        $dailyLabels = [];
        $dailyTotals = [];
        for ($i = 1; $i <= $daysInMonth; $i++) {
            $date = Carbon::createFromDate($currentYear, $currentMonth, $i)->format('Y-m-d');
            $dailyLabels[] = $i;
            $dailyTotals[] = (float)($dailyExpensesRaw[$date] ?? 0);
        }

        // Chart Data: Income Sources
        $incomeStats = (clone $incomeQuery)->selectRaw('source, SUM(amount) as total')
            ->groupBy('source')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        $incomeLabels = $incomeStats->pluck('source');
        $incomeTotals = $incomeStats->pluck('total')->map(fn($val) => (float)$val);

        // Budgets
        $budgets = \App\Models\Budget::all();
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
            'incomeTotals',
            'allCategoryStats',
            'wallets',
            'budgets',
            'currentMonth',
            'currentYear'
        ));
    }
}
