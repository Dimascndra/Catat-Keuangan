<?php

namespace App\Observers;

use App\Models\Income;
use App\Models\Wallet;

class IncomeObserver
{
    /**
     * Handle the Income "created" event.
     */
    public function created(Income $income): void
    {
        if ($income->wallet_id) {
            $wallet = Wallet::find($income->wallet_id);
            if ($wallet) {
                $wallet->increment('balance', $income->amount);
            }
        }
    }

    /**
     * Handle the Income "updated" event.
     */
    public function updated(Income $income): void
    {
        // Handle Wallet Change
        if ($income->isDirty('wallet_id')) {
            $originalWalletId = $income->getOriginal('wallet_id');
            $newWalletId = $income->wallet_id;

            if ($originalWalletId) {
                $oldWallet = Wallet::find($originalWalletId);
                if ($oldWallet) $oldWallet->decrement('balance', $income->getOriginal('amount'));
            }
            if ($newWalletId) {
                $newWallet = Wallet::find($newWalletId);
                if ($newWallet) $newWallet->increment('balance', $income->amount);
            }
        }
        // Handle Amount Change (Same Wallet)
        elseif ($income->isDirty('amount') && $income->wallet_id) {
            $diff = $income->amount - $income->getOriginal('amount');
            $wallet = Wallet::find($income->wallet_id);
            if ($wallet) {
                $wallet->increment('balance', $diff);
            }
        }
    }

    /**
     * Handle the Income "deleted" event.
     */
    public function deleted(Income $income): void
    {
        if ($income->wallet_id) {
            $wallet = Wallet::find($income->wallet_id);
            if ($wallet) {
                $wallet->decrement('balance', $income->amount);
            }
        }
    }
}
