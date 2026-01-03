<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Wallet;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transfers = Transfer::with(['fromWallet', 'toWallet'])
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('transfers.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wallets = Wallet::all();
        return view('transfers.create', compact('wallets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'from_wallet_id' => 'required|exists:wallets,id',
            'to_wallet_id' => 'required|exists:wallets,id|different:from_wallet_id',
            'amount' => 'required|numeric|min:0.01',
            'date' => 'required|date',
            'description' => 'nullable|string|max:255',
        ]);

        // Optional: Check sufficient balance
        $fromWallet = Wallet::find($validated['from_wallet_id']);
        if ($fromWallet->balance < $validated['amount']) {
            return back()->withErrors(['amount' => 'Insufficient balance in source wallet.'])->withInput();
        }

        Transfer::create($validated);

        return redirect()->route('transfers.index')
            ->with('success', 'Transfer completed successfully.');
    }
}
