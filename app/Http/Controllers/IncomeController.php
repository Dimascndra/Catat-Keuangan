<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->orderBy('date', 'desc')
            ->paginate(10);

        $totalIncome = Income::whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('amount');

        return view('incomes.index', compact('incomes', 'totalIncome'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wallets = \App\Models\Wallet::all();
        $categories = \App\Models\Category::where('type', 'income')->get();
        return view('incomes.create', compact('wallets', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'wallet_id' => 'required|exists:wallets,id',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
        ]);

        Income::create([
            'date' => $validated['date'],
            'wallet_id' => $validated['wallet_id'],
            'source' => $validated['category'], // Map category to source
            'description' => $validated['description'],
            'amount' => $validated['amount'],
        ]);

        return redirect()->route('incomes.index')
            ->with('success', 'Income created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        $wallets = \App\Models\Wallet::all();
        $categories = \App\Models\Category::where('type', 'income')->get();
        return view('incomes.edit', compact('income', 'wallets', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'wallet_id' => 'required|exists:wallets,id',
            'source' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        $income->update($validated);

        return redirect()->route('incomes.index')
            ->with('success', 'Income updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        $income->delete();

        return redirect()->route('incomes.index')
            ->with('success', 'Income deleted successfully.');
    }
}
