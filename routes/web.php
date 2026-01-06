<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Reports (Must be before expenses resource to avoid collision)
    // Reports
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/', [\App\Http\Controllers\ReportController::class, 'index'])->name('index'); // Keep index for now as redirect or general
        Route::get('/daily', [\App\Http\Controllers\ReportController::class, 'daily'])->name('daily');
        Route::get('/monthly', [\App\Http\Controllers\ReportController::class, 'monthly'])->name('monthly');
        Route::get('/yearly', [\App\Http\Controllers\ReportController::class, 'yearly'])->name('yearly');
        Route::get('/category', [\App\Http\Controllers\ReportController::class, 'category'])->name('category');
        Route::get('/mutation', [\App\Http\Controllers\ReportController::class, 'mutation'])->name('mutation');
    });
    Route::post('/reports/export', [\App\Http\Controllers\ReportController::class, 'export'])->name('reports.export');
    Route::get('/expenses/reports', function () {
        return redirect()->route('reports.index');
    })->name('expenses.reports');

    // Categories
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);

    // Expense & Income Routes
    Route::resource('incomes', IncomeController::class);
    Route::resource('expenses', ExpenseController::class);

    // Wallet & Transfer Routes
    Route::resource('wallets', \App\Http\Controllers\WalletController::class);
    Route::resource('transfers', \App\Http\Controllers\TransferController::class);

    // Budget & Debt Routes
    // Budget & Debt Routes
    Route::resource('budgets', \App\Http\Controllers\BudgetController::class);
    Route::resource('debts', \App\Http\Controllers\DebtController::class);
    Route::post('debts/{debt}/pay', [\App\Http\Controllers\DebtController::class, 'pay'])->name('debts.pay');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/dynamic-menus.php';
