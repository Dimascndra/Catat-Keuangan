<?php

namespace App\Observers;

use App\Models\Expense;
use App\Models\Wallet;

class ExpenseObserver
{
    /**
     * Handle the Expense "created" event.
     */
    public function created(Expense $expense): void
    {
        if ($expense->wallet_id) {
            $wallet = Wallet::find($expense->wallet_id);
            if ($wallet) {
                $wallet->decrement('balance', $expense->total_amount);
            }
        }
    }

    /**
     * Handle the Expense "updated" event.
     */
    public function updated(Expense $expense): void
    {
        // Handle Wallet Change
        if ($expense->isDirty('wallet_id')) {
            $originalWalletId = $expense->getOriginal('wallet_id');
            $newWalletId = $expense->wallet_id;

            if ($originalWalletId) {
                $oldWallet = Wallet::find($originalWalletId);
                if ($oldWallet) $oldWallet->increment('balance', $expense->getOriginal('total_amount'));
            }
            if ($newWalletId) {
                $newWallet = Wallet::find($newWalletId);
                if ($newWallet) $newWallet->decrement('balance', $expense->total_amount);
            }
        }
        // Handle Amount Change (Same Wallet)
        elseif ($expense->isDirty('total_amount') && $expense->wallet_id) {
            $diff = $expense->total_amount - $expense->getOriginal('total_amount');
            $wallet = Wallet::find($expense->wallet_id);
            if ($wallet) {
                $wallet->decrement('balance', $diff);
            }
        }
    }

    /**
     * Handle the Expense "deleted" event.
     */
    public function deleted(Expense $expense): void
    {
        if ($expense->wallet_id) {
            $wallet = Wallet::find($expense->wallet_id);
            if ($wallet) {
                $wallet->increment('balance', $expense->total_amount);
            }
        }
    }
}
