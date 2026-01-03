<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Expense
            ['name' => 'Makanan', 'type' => 'expense', 'color' => '#f56954'],
            ['name' => 'Transportasi', 'type' => 'expense', 'color' => '#00a65a'],
            ['name' => 'Tempat Tinggal', 'type' => 'expense', 'color' => '#f39c12'],
            ['name' => 'Hiburan', 'type' => 'expense', 'color' => '#00c0ef'],
            ['name' => 'Belanja', 'type' => 'expense', 'color' => '#3c8dbc'],
            ['name' => 'Tagihan', 'type' => 'expense', 'color' => '#d2d6de'],
            ['name' => 'Kesehatan', 'type' => 'expense', 'color' => '#605ca8'],
            ['name' => 'Pendidikan', 'type' => 'expense', 'color' => '#ff851b'],
            ['name' => 'Lainnya', 'type' => 'expense', 'color' => '#999999'],

            // Income
            ['name' => 'Gaji', 'type' => 'income', 'color' => '#00a65a'],
            ['name' => 'Tunjangan', 'type' => 'income', 'color' => '#00c0ef'],
            ['name' => 'Bonus', 'type' => 'income', 'color' => '#f39c12'],
            ['name' => 'Investasi', 'type' => 'income', 'color' => '#3c8dbc'],
            ['name' => 'Lainnya', 'type' => 'income', 'color' => '#999999'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name'], 'type' => $category['type']],
                $category
            );
        }
    }
}
