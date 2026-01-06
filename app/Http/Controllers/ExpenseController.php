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

        // Global Date & Wallet Filter
        $currentMonth = $request->input('month', session('global_month', now()->month));
        $currentYear = $request->input('year', session('global_year', now()->year));
        $globalWalletId = $request->input('wallet_id', session('global_wallet_id'));

        session([
            'global_month' => $currentMonth,
            'global_year' => $currentYear,
            'global_wallet_id' => $globalWalletId
        ]);

        // Determine active wallet (for Tabs if needed, OR for Filtering)
        // If Global Filter is Set -> Use it.
        // If Global Filter is "All" -> Use Request/Tab wallet OR show All?
        // User asked for separation. If "All" is selected in header, we should probably allow the Tabs to work as they did before?
        // OR simply showing "All" in the list is the expected behavior for "All Wallets".
        // Let's implement: Global Filter overrides everything.
        // If Global == Specific Wallet -> Filter by it.
        // If Global == All -> Show All (Remove Tab filtering logic unless user clicks a tab? But tabs are redundant if we have global filter).
        // Let's assume Global Filter replaces the Tabs functionality for filtering purposes.

        $activeWalletId = $globalWalletId; // Logic simplification

        $query = Expense::query();

        if ($activeWalletId) {
            $query->where('wallet_id', $activeWalletId);
        }

        // Date Filtering Logic
        // If specific range is provided, use it. Otherwise, fallback to Global Month.
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('date', [$request->start_date, $request->end_date]);
        } else {
            // Filter by Global Date
            $query->whereMonth('date', $currentMonth)
                ->whereYear('date', $currentYear);
        }

        // Local Filters (Category & Search)
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('search')) {
            $query->where('description', 'like', '%' . $request->search . '%');
        }

        // Sorting
        $sortField = $request->query('sort', 'date');
        $sortDirection = $request->query('direction', 'desc');

        if (in_array($sortField, ['date', 'total_amount'])) {
            $query->orderBy($sortField, $sortDirection);
        } else {
            $query->orderBy('date', 'desc');
        }

        $expenses = $query->paginate(10)->withQueryString();

        // Financial Summary (Based on current filter)
        $summaryQuery = \App\Models\Expense::query();
        if ($activeWalletId) {
            $summaryQuery->where('wallet_id', $activeWalletId);
        }

        $totalExpenseToday = (clone $summaryQuery)->whereDate('date', now()->today())->sum('total_amount');
        $totalExpenseThisWeek = (clone $summaryQuery)->whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])->sum('total_amount');
        $totalExpenseThisMonth = (clone $summaryQuery)->whereMonth('date', $currentMonth)->whereYear('date', $currentYear)->sum('total_amount');

        // Fetch Categories for Filter Dropdown
        $categories = \App\Models\Category::where('type', 'expense')->orderBy('name')->get();

        return view('expenses.index', compact('expenses', 'wallets', 'activeWalletId', 'sortField', 'sortDirection', 'totalExpenseToday', 'totalExpenseThisWeek', 'totalExpenseThisMonth', 'currentMonth', 'currentYear', 'categories'));
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
