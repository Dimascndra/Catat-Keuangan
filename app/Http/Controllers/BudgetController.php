<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Expense;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budgets = Budget::all();
        // Calculate progress for each budget
        foreach ($budgets as $budget) {
            // Check implicit spent_amount
            $budget->spent_amount = $budget->spent_amount;
        }
        return view('budgets.index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all expense categories from the categories table
        $allCategories = \App\Models\Category::where('type', 'expense')->orderBy('name')->get();

        // Exclude categories that already have a budget
        $budgetedCategoryNames = Budget::pluck('category')->toArray();

        // Filter categories
        $categories = $allCategories->filter(function ($category) use ($budgetedCategoryNames) {
            return !in_array($category->name, $budgetedCategoryNames);
        });

        return view('budgets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|unique:budgets,category|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        Budget::create($validated);

        return redirect()->route('budgets.index')
            ->with('success', 'Budget set successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Budget $budget)
    {
        return view('budgets.edit', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Budget $budget)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $budget->update($validated);

        return redirect()->route('budgets.index')
            ->with('success', 'Budget updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();

        return redirect()->route('budgets.index')
            ->with('success', 'Budget deleted successfully.');
    }
}
