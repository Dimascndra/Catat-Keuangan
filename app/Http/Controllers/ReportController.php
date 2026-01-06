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
        // Chart Arrays
        $chartLabels = [];
        $incomeData = [];
        $expenseData = [];

        foreach ($dates as $date) {
            $inc = $dailyIncomes[$date]->total ?? 0;
            $exp = $dailyExpenses[$date]->total ?? 0;

            $dailyRecap[] = [
                'date' => $date,
                'income' => $inc,
                'expense' => $exp,
            ];

            // Chart Data
            $chartLabels[] = \Carbon\Carbon::parse($date)->format('d M');
            $incomeData[] = $inc;
            $expenseData[] = $exp;
        }

        $wallets = \App\Models\Wallet::all();

        return view('reports.daily', compact('dailyRecap', 'startDate', 'endDate', 'wallets', 'walletId', 'chartLabels', 'incomeData', 'expenseData'));
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
        $chartLabels = [];
        $incomeData = [];
        $expenseData = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthKey = str_pad($i, 2, '0', STR_PAD_LEFT);
            $inc = $monthlyIncomes[$monthKey] ?? 0;
            $exp = $monthlyExpenses[$monthKey] ?? 0;

            $monthlyRecap[] = [
                'month' => date("F", mktime(0, 0, 0, $i, 10)),
                'income' => $inc,
                'expense' => $exp,
            ];

            $chartLabels[] = date("M", mktime(0, 0, 0, $i, 10));
            $incomeData[] = $inc;
            $expenseData[] = $exp;
        }

        $wallets = \App\Models\Wallet::all();
        return view('reports.monthly', compact('monthlyRecap', 'year', 'wallets', 'walletId', 'chartLabels', 'incomeData', 'expenseData'));
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
        $chartLabels = [];
        $incomeData = [];
        $expenseData = [];

        for ($y = $startYear; $y <= $endYear; $y++) {
            $inc = $yearlyIncomes[$y] ?? 0;
            $exp = $yearlyExpenses[$y] ?? 0;

            $yearlyRecap[] = [
                'year' => $y,
                'income' => $inc,
                'expense' => $exp,
            ];

            $chartLabels[] = (string)$y;
            $incomeData[] = $inc;
            $expenseData[] = $exp;
        }

        $wallets = \App\Models\Wallet::all();
        return view('reports.yearly', compact('yearlyRecap', 'wallets', 'walletId', 'chartLabels', 'incomeData', 'expenseData'));
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

        $chartLabels = $categories->pluck('category');
        $chartSeries = $categories->pluck('total')->map(function ($item) {
            return (float)$item;
        });

        $wallets = \App\Models\Wallet::all();
        return view('reports.category', compact('categories', 'startDate', 'endDate', 'wallets', 'walletId', 'chartLabels', 'chartSeries'));
    }

    public function mutation(Request $request)
    {
        $startDate = $request->input('start_date', date('Y-m-01'));
        $endDate = $request->input('end_date', date('Y-m-t'));
        $walletId = $request->input('wallet_id');

        $walletHistory = [];
        $openingBalance = 0;

        // If a specific wallet is selected, we can calculate precise running balance
        // If ALL wallets are selected, it's a bit ambiguous (sum of all wallets?), but we can still do it.

        // 1. Calculate Opening Balance (Balance before start_date)
        $initialBalanceQuery = \App\Models\Wallet::query();
        if ($walletId) {
            $initialBalanceQuery->where('id', $walletId);
        }
        $openingBalance += $initialBalanceQuery->sum('initial_balance');

        $incomeBefore = \App\Models\Income::where('date', '<', $startDate)
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('wallet_id', $walletId);
            })->sum('amount');

        $expenseBefore = \App\Models\Expense::where('date', '<', $startDate)
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('wallet_id', $walletId);
            })->sum(DB::raw('amount * quantity'));

        // Transfers logic
        $transfersInBefore = \App\Models\Transfer::where('date', '<', $startDate)
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('to_wallet_id', $walletId);
            })->sum('amount');

        $transfersOutBefore = \App\Models\Transfer::where('date', '<', $startDate)
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('from_wallet_id', $walletId);
            })->sum('amount');


        $openingBalance = $openingBalance + $incomeBefore - $expenseBefore + $transfersInBefore - $transfersOutBefore;


        // 2. Fetch Transactions in Range
        $incomes = \App\Models\Income::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('wallet_id', $walletId);
            })->get()->map(function ($i) {
                $i->type = 'Income';
                $i->class = 'success'; // Color
                $i->mutation_amount = $i->amount;
                return $i;
            });

        $expenses = \App\Models\Expense::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('wallet_id', $walletId);
            })->get()->map(function ($e) {
                $e->type = 'Expense';
                $e->class = 'danger';
                $e->mutation_amount = - ($e->amount * $e->quantity);
                return $e;
            });

        $transfersIn = collect([]);
        $transfersOut = collect([]);

        // Only fetch transfers if we are looking at specific wallet or just list all transfers?
        // If All Wallets: Transfer from A to B is neutral globally? No, it's out form A, in to B.
        // Showing "Transfer" in general mutation list is fine.

        $transfersIn = \App\Models\Transfer::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('to_wallet_id', $walletId);
            })->get()->map(function ($t) {
                $t->type = 'Transfer In';
                $t->class = 'primary';
                $t->mutation_amount = $t->amount;
                $t->description = "From: " . ($t->fromWallet->name ?? '-');
                return $t;
            });

        $transfersOut = \App\Models\Transfer::whereBetween('date', [$startDate, $endDate])
            ->when($walletId, function ($q) use ($walletId) {
                $q->where('from_wallet_id', $walletId);
            })->get()->map(function ($t) {
                $t->type = 'Transfer Out';
                $t->class = 'warning';
                $t->mutation_amount = -$t->amount;
                $t->description = "To: " . ($t->toWallet->name ?? '-');
                return $t;
            });

        $transactions = $incomes->merge($expenses)->merge($transfersIn)->merge($transfersOut)->sortBy(function ($t) {
            return $t->date . $t->created_at; // Sort by date then created_at
        });

        // 3. Calculate Running Balance
        $currentBalance = $openingBalance;
        $mutationHistory = [];

        foreach ($transactions as $t) {
            $currentBalance += $t->mutation_amount;
            $mutationHistory[] = (object) [
                'date' => $t->date,
                'type' => $t->type,
                'class' => $t->class,
                'category' => $t->category ?? $t->type,
                'description' => $t->description,
                'amount' => $t->mutation_amount,
                'balance' => $currentBalance
            ];
        }

        $wallets = \App\Models\Wallet::all();

        return view('reports.mutation', compact('mutationHistory', 'openingBalance', 'startDate', 'endDate', 'wallets', 'walletId'));
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
