<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',
        'type',
        'name',
        'amount',
        'paid_amount',
        'due_date',
        'status',
        'description',
    ];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function payments()
    {
        return $this->hasMany(DebtPayment::class);
    }

    public function getRemainingAmountAttribute()
    {
        return $this->amount - $this->paid_amount;
    }

    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }

    public function getFormattedPaidAmountAttribute()
    {
        return 'Rp ' . number_format($this->paid_amount, 0, ',', '.');
    }

    public function getFormattedRemainingAmountAttribute()
    {
        return 'Rp ' . number_format($this->remaining_amount, 0, ',', '.');
    }
}
