<?php

namespace App\Observers;

use App\Models\Transfer;
use App\Models\Wallet;

class TransferObserver
{
    /**
     * Handle the Transfer "created" event.
     */
    public function created(Transfer $transfer): void
    {
        if ($transfer->from_wallet_id) {
            $fromWallet = Wallet::find($transfer->from_wallet_id);
            if ($fromWallet) $fromWallet->decrement('balance', $transfer->amount);
        }

        if ($transfer->to_wallet_id) {
            $toWallet = Wallet::find($transfer->to_wallet_id);
            if ($toWallet) $toWallet->increment('balance', $transfer->amount);
        }
    }

    /**
     * Handle the Transfer "updated" event.
     */
    public function updated(Transfer $transfer): void
    {
        // Revert old transaction
        $originalFromId = $transfer->getOriginal('from_wallet_id');
        $originalToId = $transfer->getOriginal('to_wallet_id');
        $originalAmount = $transfer->getOriginal('amount');

        if ($originalFromId) {
            $oldFrom = Wallet::find($originalFromId);
            if ($oldFrom) $oldFrom->increment('balance', $originalAmount);
        }

        if ($originalToId) {
            $oldTo = Wallet::find($originalToId);
            if ($oldTo) $oldTo->decrement('balance', $originalAmount);
        }

        // Apply new transaction
        if ($transfer->from_wallet_id) {
            $newFrom = Wallet::find($transfer->from_wallet_id);
            if ($newFrom) $newFrom->decrement('balance', $transfer->amount);
        }

        if ($transfer->to_wallet_id) {
            $newTo = Wallet::find($transfer->to_wallet_id);
            if ($newTo) $newTo->increment('balance', $transfer->amount);
        }
    }

    /**
     * Handle the Transfer "deleted" event.
     */
    public function deleted(Transfer $transfer): void
    {
        if ($transfer->from_wallet_id) {
            $fromWallet = Wallet::find($transfer->from_wallet_id);
            if ($fromWallet) $fromWallet->increment('balance', $transfer->amount);
        }

        if ($transfer->to_wallet_id) {
            $toWallet = Wallet::find($transfer->to_wallet_id);
            if ($toWallet) $toWallet->decrement('balance', $transfer->amount);
        }
    }
}
