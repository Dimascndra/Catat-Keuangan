<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        \App\Models\Income::observe(\App\Observers\IncomeObserver::class);
        \App\Models\Expense::observe(\App\Observers\ExpenseObserver::class);
        \App\Models\Transfer::observe(\App\Observers\TransferObserver::class);
    }
}
