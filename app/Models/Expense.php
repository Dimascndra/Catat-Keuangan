<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'wallet_id',
        'category',
        'description',
        'quantity',
        'amount',
        'total_amount',
        'image_path',
        'wallet_id',
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    protected $casts = [
        'date' => 'date',
        'quantity' => 'integer',
        'amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($expense) {
            // Ensure total_amount is calculated if not set, or re-calculated to be safe
            if ($expense->quantity && $expense->amount) {
                $expense->total_amount = $expense->quantity * $expense->amount;
            }
        });
    }

    /**
     * Get the formatted amount (Rupiah).
     */
    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }

    /**
     * Get the formatted total amount (Rupiah).
     */
    public function getFormattedTotalAmountAttribute()
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }
}
