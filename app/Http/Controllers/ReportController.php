<?php

namespace App\Http\Controllers;

use App\Exports\ExpensesExport;
use App\Models\Expense;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use PDF; // Barryvdh\DomPDF\Facade
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        return redirect()->route('reports.daily');
    }

    public function daily(Request $request)
    {
        $startDate = $request->input('start_date', date('Y-m-01'));
        $endDate = $request->input('end_date', date('Y-m-t'));
        $walletId = $request->input('wallet_id');

        // Logic for Daily Recap
        $dailyIncomes = \App\Models\Income::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw('date, SUM(amount) as total')
            ->groupBy('date')
            ->get()->keyBy('date');

        $dailyExpenses = \App\Models\Expense::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw('date, SUM(amount * quantity) as total')
            ->groupBy('date')
            ->get()->keyBy('date');

        $dates = $dailyIncomes->keys()->merge($dailyExpenses->keys())->unique()->sort();
        $dailyRecap = [];
        foreach ($dates as $date) {
            $dailyRecap[] = [
                'date' => $date,
                'income' => $dailyIncomes[$date]->total ?? 0,
                'expense' => $dailyExpenses[$date]->total ?? 0,
            ];
        }

        $wallets = \App\Models\Wallet::all();

        return view('reports.daily', compact('dailyRecap', 'startDate', 'endDate', 'wallets', 'walletId'));
    }

    public function monthly(Request $request)
    {
        $year = $request->input('year', date('Y'));
        $walletId = $request->input('wallet_id');

        $monthlyIncomes = \App\Models\Income::whereYear('date', $year)
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw("DATE_FORMAT(date, '%m') as month, SUM(amount) as total")
            ->groupBy('month')
            ->get()->pluck('total', 'month');

        $monthlyExpenses = \App\Models\Expense::whereYear('date', $year)
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw("DATE_FORMAT(date, '%m') as month, SUM(amount * quantity) as total")
            ->groupBy('month')
            ->get()->pluck('total', 'month');

        $monthlyRecap = [];
        for ($i = 1; $i <= 12; $i++) {
            $month = str_pad($i, 2, '0', STR_PAD_LEFT);
            $monthlyRecap[] = [
                'month' => date("F", mktime(0, 0, 0, $i, 10)),
                'income' => $monthlyIncomes[$month] ?? 0,
                'expense' => $monthlyExpenses[$month] ?? 0,
            ];
        }

        $wallets = \App\Models\Wallet::all();
        return view('reports.monthly', compact('monthlyRecap', 'year', 'wallets', 'walletId'));
    }

    public function yearly(Request $request)
    {
        // Simple 5 year trend
        $walletId = $request->input('wallet_id');
        $startYear = date('Y') - 4;
        $endYear = date('Y');

        $yearlyIncomes = \App\Models\Income::whereBetween(DB::raw('YEAR(date)'), [$startYear, $endYear])
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw("YEAR(date) as year, SUM(amount) as total")
            ->groupBy('year')
            ->get()->pluck('total', 'year');

        $yearlyExpenses = \App\Models\Expense::whereBetween(DB::raw('YEAR(date)'), [$startYear, $endYear])
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw("YEAR(date) as year, SUM(amount * quantity) as total")
            ->groupBy('year')
            ->get()->pluck('total', 'year');

        $yearlyRecap = [];
        for ($y = $startYear; $y <= $endYear; $y++) {
            $yearlyRecap[] = [
                'year' => $y,
                'income' => $yearlyIncomes[$y] ?? 0,
                'expense' => $yearlyExpenses[$y] ?? 0,
            ];
        }

        $wallets = \App\Models\Wallet::all();
        return view('reports.yearly', compact('yearlyRecap', 'wallets', 'walletId'));
    }

    public function category(Request $request)
    {
        $startDate = $request->input('start_date', date('Y-m-01'));
        $endDate = $request->input('end_date', date('Y-m-t'));
        $walletId = $request->input('wallet_id');

        $categories = \App\Models\Expense::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                return $q->where('wallet_id', $walletId);
            })
            ->selectRaw('category, SUM(amount * quantity) as total')
            ->groupBy('category')
            ->orderBy('total', 'desc')
            ->get();

        $wallets = \App\Models\Wallet::all();
        return view('reports.category', compact('categories', 'startDate', 'endDate', 'wallets', 'walletId'));
    }

    public function export(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'format' => 'required|in:excel,pdf',
        ]);

        $startDate = $request->start_date;
        $endDate = $request->end_date;

        if ($request->format == 'excel') {
            return Excel::download(new ExpensesExport($startDate, $endDate), 'expenses_report_' . $startDate . '_to_' . $endDate . '.xlsx');
        } elseif ($request->format == 'pdf') {
            $expenses = Expense::with('wallet')
                ->whereBetween('date', [$startDate, $endDate])
                ->orderBy('date')
                ->get();

            $total = $expenses->sum('total_amount');

            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('reports.pdf', compact('expenses', 'startDate', 'endDate', 'total'));
            return $pdf->download('expenses_report_' . $startDate . '_to_' . $endDate . '.pdf');
        }
    }
}
