<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'initial_balance',
        'balance',
    ];

    protected $casts = [
        'initial_balance' => 'decimal:2',
        'balance' => 'decimal:2',
    ];

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function transfersSent()
    {
        return $this->hasMany(Transfer::class, 'from_wallet_id');
    }

    public function transfersReceived()
    {
        return $this->hasMany(Transfer::class, 'to_wallet_id');
    }

    public function getFormattedBalanceAttribute()
    {
        return 'Rp ' . number_format($this->balance, 0, ',', '.');
    }
}
