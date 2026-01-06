<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\DebtPayment;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payable = Debt::where('type', 'payable')->latest()->get();
        $receivable = Debt::where('type', 'receivable')->latest()->get();
        $wallets = Wallet::all();

        return view('debts.index', compact('payable', 'receivable', 'wallets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wallets = Wallet::all();
        return view('debts.create', compact('wallets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:payable,receivable',
            'wallet_id' => 'nullable|exists:wallets,id', // Optional wallet selection
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'due_date' => 'nullable|date',
            'description' => 'nullable|string|max:255',
        ]);

        DB::transaction(function () use ($validated) {
            $debt = Debt::create($validated);

            if (!empty($validated['wallet_id'])) {
                $wallet = Wallet::findOrFail($validated['wallet_id']);
                if ($validated['type'] == 'payable') {
                    // Hutang (Borrowing money) -> Money comes IN to wallet
                    $wallet->balance += $validated['amount'];
                } else {
                    // Piutang (Lending money) -> Money goes OUT from wallet
                    $wallet->balance -= $validated['amount'];
                }
                $wallet->save();
            }
        });

        return redirect()->route('debts.index')
            ->with('success', 'Record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Debt $debt)
    {
        // Not implemented yet
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Debt $debt)
    {
        return view('debts.edit', compact('debt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Debt $debt)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'due_date' => 'nullable|date',
            'description' => 'nullable|string|max:255',
        ]);

        // Amount cannot be changed easily if payments exist, simplified for now
        $debt->update($validated);

        return redirect()->route('debts.index')
            ->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Debt $debt)
    {
        // Rollback payments if necessary? For now, just delete.
        $debt->delete();

        return redirect()->route('debts.index')
            ->with('success', 'Record deleted successfully.');
    }

    /**
     * Process a payment for a debt.
     */
    public function pay(Request $request, Debt $debt)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0.01|max:' . $debt->remaining_amount,
            'wallet_id' => 'required|exists:wallets,id',
            'date' => 'required|date',
        ]);

        DB::transaction(function () use ($debt, $validated) {
            // Create Payment Record
            DebtPayment::create([
                'debt_id' => $debt->id,
                'amount' => $validated['amount'],
                'date' => $validated['date'],
                'wallet_id' => $validated['wallet_id'],
            ]);

            // Update Debt Paid Amount & Status
            $debt->paid_amount += $validated['amount'];
            if ($debt->paid_amount >= $debt->amount - 0.01) { // Floating point tolerance
                $debt->status = 'paid';
            }
            $debt->save();

            // Update Wallet Balance
            $wallet = Wallet::findOrFail($validated['wallet_id']);
            if ($debt->type == 'payable') {
                // Paying a debt (Spending money)
                $wallet->balance -= $validated['amount'];
            } else {
                // Receiving a payment (Receiving money)
                $wallet->balance += $validated['amount'];
            }
            $wallet->save();
        });

        return redirect()->route('debts.index')
            ->with('success', 'Payment recorded successfully.');
    }
}
