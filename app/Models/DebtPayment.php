<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebtPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'debt_id',
        'amount',
        'date',
        'wallet_id',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function debt()
    {
        return $this->belongsTo(Debt::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
