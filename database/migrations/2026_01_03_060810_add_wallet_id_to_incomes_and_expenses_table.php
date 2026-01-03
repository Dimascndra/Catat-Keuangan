<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Add wallet_id column (nullable first to allow creating it)
        Schema::table('incomes', function (Blueprint $table) {
            $table->foreignId('wallet_id')->nullable()->after('id')->constrained('wallets')->onDelete('set null');
        });

        Schema::table('expenses', function (Blueprint $table) {
            $table->foreignId('wallet_id')->nullable()->after('id')->constrained('wallets')->onDelete('set null');
        });

        // 2. Create Default Wallet
        $defaultWalletId = DB::table('wallets')->insertGetId([
            'name' => 'Tunai (Default)',
            'type' => 'Cash',
            'initial_balance' => 0,
            'balance' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Assign existing records to default wallet
        DB::table('incomes')->update(['wallet_id' => $defaultWalletId]);
        DB::table('expenses')->update(['wallet_id' => $defaultWalletId]);

        // Optionally, calculate initial balance from existing data? 
        // Logic: Balance = Initial + Incomes - Expenses
        // Since initial is 0, just sum them up.

        $totalIncome = DB::table('incomes')->sum('amount');
        $totalExpense = DB::table('expenses')->sum('total_amount');
        $currentBalance = $totalIncome - $totalExpense;

        DB::table('wallets')->where('id', $defaultWalletId)->update([
            'balance' => $currentBalance
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('incomes', function (Blueprint $table) {
            $table->dropForeign(['wallet_id']);
            $table->dropColumn('wallet_id');
        });

        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign(['wallet_id']);
            $table->dropColumn('wallet_id');
        });
    }
};
