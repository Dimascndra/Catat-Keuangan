<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'amount',
    ];

    /**
     * Get the formatted budget limit.
     */
    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }

    /**
     * Calculate spent amount for this category in the current month.
     */
    public function getSpentAmountAttribute()
    {
        return Expense::where('category', $this->category)
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->sum('total_amount'); // Assuming 'total_amount' is the correct field for expense value
    }

    /**
     * Get percentage of budget used.
     */
    public function getProgressAttribute()
    {
        if ($this->amount == 0) return 0;
        return min(100, round(($this->spent_amount / $this->amount) * 100));
    }
}
