<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get all wallets for tabs
        $wallets = \App\Models\Wallet::all();

        // Determine active wallet (default to first wallet if not provided)
        $activeWalletId = $request->query('wallet_id', $wallets->first()->id ?? null);

        $query = Expense::query();

        if ($activeWalletId) {
            $query->where('wallet_id', $activeWalletId);
        }

        // Filter by Current Month
        $query->whereMonth('date', now()->month)
            ->whereYear('date', now()->year);

        // Sorting
        $sortField = $request->query('sort', 'date');
        $sortDirection = $request->query('direction', 'desc');

        // Allow only specific columns to be sorted
        if (in_array($sortField, ['date', 'total_amount'])) {
            $query->orderBy($sortField, $sortDirection);
        } else {
            $query->orderBy('date', 'desc');
        }

        $expenses = $query->paginate(10)->withQueryString();

        // Financial Summary (Expense Focused)
        $totalExpenseToday = \App\Models\Expense::where('wallet_id', $activeWalletId)->whereDate('date', now()->today())->sum('total_amount');
        $totalExpenseThisWeek = \App\Models\Expense::where('wallet_id', $activeWalletId)->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])->sum('total_amount');
        $totalExpenseThisMonth = \App\Models\Expense::where('wallet_id', $activeWalletId)->whereMonth('date', now()->month)->whereYear('date', now()->year)->sum('total_amount');

        return view('expenses.index', compact('expenses', 'wallets', 'activeWalletId', 'sortField', 'sortDirection', 'totalExpenseToday', 'totalExpenseThisWeek', 'totalExpenseThisMonth'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wallets = \App\Models\Wallet::all();
        $categories = \App\Models\Category::where('type', 'expense')->get();
        return view('expenses.create', compact('wallets', 'categories'));
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
            'description' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $data = $validated;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('expenses', 'public');
            $data['image_path'] = $path;
        }

        Expense::create($data);

        return redirect()->route('expenses.index')
            ->with('success', 'Expense created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return view('expenses.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $wallets = \App\Models\Wallet::all();
        $categories = \App\Models\Category::where('type', 'expense')->get();
        return view('expenses.edit', compact('expense', 'wallets', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'wallet_id' => 'required|exists:wallets,id',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $validated;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($expense->image_path && \Illuminate\Support\Facades\Storage::disk('public')->exists($expense->image_path)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($expense->image_path);
            }
            $path = $request->file('image')->store('expenses', 'public');
            $data['image_path'] = $path;
        }

        $expense->update($data);

        return redirect()->route('expenses.index')
            ->with('success', 'Expense updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')
            ->with('success', 'Expense deleted successfully.');
    }

    /**
     * Display the reports.
     */
}
