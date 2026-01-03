<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallets = Wallet::all();
        $totalBalance = $wallets->sum('balance');

        return view('wallets.index', compact('wallets', 'totalBalance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wallets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:50',
            'initial_balance' => 'required|numeric|min:0',
        ]);

        $validated['balance'] = $validated['initial_balance'];

        Wallet::create($validated);

        return redirect()->route('wallets.index')
            ->with('success', 'Wallet created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallet)
    {
        return view('wallets.edit', compact('wallet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wallet $wallet)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:50',
            // initial_balance generally shouldn't be changed to affect current balance logic easily without complex recalculation.
            // But if user messed up initial balance, they might want to fix it.
            // If initial balance changes, we should adjust balance by the difference.
            'initial_balance' => 'required|numeric|min:0',
        ]);

        $diff = $validated['initial_balance'] - $wallet->initial_balance;
        $validated['balance'] = $wallet->balance + $diff;

        $wallet->update($validated);

        return redirect()->route('wallets.index')
            ->with('success', 'Wallet updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        // Optional: Check for transactions.
        if ($wallet->incomes()->exists() || $wallet->expenses()->exists() || $wallet->transfersSent()->exists() || $wallet->transfersReceived()->exists()) {
            return back()->with('error', 'Cannot delete wallet with existing transactions.');
        }

        $wallet->delete();

        return redirect()->route('wallets.index')
            ->with('success', 'Wallet deleted successfully.');
    }
}
