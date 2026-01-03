<?php

namespace App\Http\Controllers;

use App\Exports\ExpensesExport;
use App\Models\Expense;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF; // Barryvdh\DomPDF\Facade
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Default to current month
        $startDate = $request->input('start_date', date('Y-m-01'));
        $endDate = $request->input('end_date', date('Y-m-t'));
        $walletId = $request->input('wallet_id');

        // 1. Daily Recap (Income vs Expense)
        $dailyIncomes = \App\Models\Income::whereBetween('date', [$startDate, $endDate])
            ->selectRaw('date, SUM(amount) as total')
            ->groupBy('date')
            ->get()->keyBy('date');

        $dailyExpenses = \App\Models\Expense::whereBetween('date', [$startDate, $endDate])
            ->selectRaw('date, SUM(total_amount) as total') // Note: Expense uses total_amount logic if quantity exists, but model accessor handles it usually. DB column is amount? Check schema.
            // Wait, Expense schema has 'amount' and 'quantity'. 'total_amount' is likely an accessor.
            // In DB query we should likely use 'amount' if quantity is 1, or 'amount * quantity'.
            // Let's check Expense model first. If 'total_amount' is a virtual attribute, I can't select it directly in selectRaw without logic.
            // Standard approach: SUM(amount * quantity) if quantity column exists.
            ->selectRaw('date, SUM(amount * quantity) as total')
            ->groupBy('date')
            ->get()->keyBy('date');

        // Merge dates
        $dates = $dailyIncomes->keys()->merge($dailyExpenses->keys())->unique()->sort();
        $dailyRecap = [];
        foreach ($dates as $date) {
            $dailyRecap[] = [
                'date' => $date,
                'income' => $dailyIncomes[$date]->total ?? 0,
                'expense' => $dailyExpenses[$date]->total ?? 0,
            ];
        }

        // 2. Category Breakdown (Expense Only)
        $categoryRecap = \App\Models\Expense::whereBetween('date', [$startDate, $endDate])
            ->selectRaw('category, COUNT(*) as count, SUM(amount * quantity) as total')
            ->groupBy('category')
            ->orderBy('total', 'desc')
            ->get();

        // 3. Cash Flow
        $initialBalance = \App\Models\Wallet::sum('initial_balance');
        $incomeBefore = \App\Models\Income::where('date', '<', $startDate)->sum('amount');
        $expenseBefore = \App\Models\Expense::where('date', '<', $startDate)->sum(DB::raw('amount * quantity'));

        $openingBalance = $initialBalance + $incomeBefore - $expenseBefore;

        $totalIncome = \App\Models\Income::whereBetween('date', [$startDate, $endDate])->sum('amount');
        $totalExpense = \App\Models\Expense::whereBetween('date', [$startDate, $endDate])->sum(DB::raw('amount * quantity'));

        $closingBalance = $openingBalance + $totalIncome - $totalExpense;

        $cashFlow = [
            'opening_balance' => $openingBalance,
            'income' => $totalIncome,
            'expense' => $totalExpense,
            'closing_balance' => $closingBalance
        ];

        // 4. Monthly Trends (Last 12 Months)
        // This is tricky as it might span before start_date. Let's fix it to this year or just always show last 12 months up to end_date.
        // Let's go with 12 months ending at end_date.
        $trendStart = \Carbon\Carbon::parse($endDate)->subMonths(11)->startOfMonth();
        $trendEnd = \Carbon\Carbon::parse($endDate)->endOfMonth();

        $monthlyIncomes = \App\Models\Income::whereBetween('date', [$trendStart, $trendEnd])
            ->selectRaw("DATE_FORMAT(date, '%Y-%m') as month, SUM(amount) as total")
            ->groupBy('month')
            ->get()->pluck('total', 'month');

        $monthlyExpenses = \App\Models\Expense::whereBetween('date', [$trendStart, $trendEnd])
            ->selectRaw("DATE_FORMAT(date, '%Y-%m') as month, SUM(amount * quantity) as total")
            ->groupBy('month')
            ->get()->pluck('total', 'month');

        $monthlyTrends = [];
        $period = \Carbon\CarbonPeriod::create($trendStart, '1 month', $trendEnd);
        foreach ($period as $dt) {
            $month = $dt->format('Y-m');
            $monthlyTrends[] = [
                'month' => $dt->format('F Y'),
                'income' => $monthlyIncomes[$month] ?? 0,
                'expense' => $monthlyExpenses[$month] ?? 0,
            ];
        }

        // 5. Wallet History (Mutasi with Running Balance) - Logic is complex for running balance.
        // Simplified: Just list transactions.
        $walletHistory = [];
        if ($walletId) {
            // Get initial balance for this wallet specifically
            $w = \App\Models\Wallet::find($walletId);
            if ($w) {
                // Calc balance before range
                $wIncomeBefore = \App\Models\Income::where('wallet_id', $walletId)->where('date', '<', $startDate)->sum('amount');
                $wExpenseBefore = \App\Models\Expense::where('wallet_id', $walletId)->where('date', '<', $startDate)->sum(DB::raw('amount * quantity'));
                // Need to account for transfers too? Yes. But Transfer logic might be heavy.
                // Let's stick to Income/Expense for now, and maybe Transfers later if critical.
                // Actually, without transfers, wallet balance is wrong.
                // Fetch Transfers
                $transfersInBefore = \App\Models\Transfer::where('to_wallet_id', $walletId)->where('date', '<', $startDate)->sum('amount');
                $transfersOutBefore = \App\Models\Transfer::where('from_wallet_id', $walletId)->where('date', '<', $startDate)->sum('amount');

                $currentRunningBalance = $w->initial_balance + $wIncomeBefore - $wExpenseBefore + $transfersInBefore - $transfersOutBefore;

                // Fetch all transactions in range
                $incomes = \App\Models\Income::where('wallet_id', $walletId)->whereBetween('date', [$startDate, $endDate])->get()->map(function ($i) {
                    $i->type = 'income';
                    return $i;
                });
                $expenses = \App\Models\Expense::where('wallet_id', $walletId)->whereBetween('date', [$startDate, $endDate])->get()->map(function ($e) {
                    $e->type = 'expense';
                    return $e;
                });
                $transfersIn = \App\Models\Transfer::where('to_wallet_id', $walletId)->whereBetween('date', [$startDate, $endDate])->get()->map(function ($t) {
                    $t->type = 'transfer_in';
                    return $t;
                });
                $transfersOut = \App\Models\Transfer::where('from_wallet_id', $walletId)->whereBetween('date', [$startDate, $endDate])->get()->map(function ($t) {
                    $t->type = 'transfer_out';
                    return $t;
                });

                $walletTransactions = $incomes->concat($expenses)->concat($transfersIn)->concat($transfersOut)->sortBy('date');

                foreach ($walletTransactions as $t) {
                    $amount = 0;
                    if ($t->type == 'income') {
                        $amount = $t->amount;
                        $currentRunningBalance += $amount;
                    } elseif ($t->type == 'expense') {
                        $amount = - ($t->amount * $t->quantity);
                        $currentRunningBalance += $amount;
                    } elseif ($t->type == 'transfer_in') {
                        $amount = $t->amount;
                        $currentRunningBalance += $amount;
                    } elseif ($t->type == 'transfer_out') {
                        $amount = -$t->amount;
                        $currentRunningBalance += $amount;
                    }

                    $walletHistory[] = [
                        'date' => $t->date,
                        'type' => $t->type,
                        'description' => $t->description ?? $t->category . ' ' . $t->description, // Fallback
                        'amount' => $amount,
                        'balance' => $currentRunningBalance
                    ];
                }
            }
        }

        $wallets = \App\Models\Wallet::all();

        return view('reports.index', compact(
            'startDate',
            'endDate',
            'walletId',
            'dailyRecap',
            'categoryRecap',
            'cashFlow',
            'monthlyTrends',
            'walletHistory',
            'wallets'
        ));
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
