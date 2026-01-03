<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExpensesExport implements FromCollection, WithHeadings, WithMapping
{
    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Expense::with('wallet')
            ->whereBetween('date', [$this->startDate, $this->endDate])
            ->orderBy('date')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Date',
            'Category',
            'Description',
            'Wallet',
            'Quantity',
            'Price (Rp)',
            'Total (Rp)',
        ];
    }

    public function map($expense): array
    {
        return [
            $expense->date->format('Y-m-d'),
            $expense->category,
            $expense->description,
            $expense->wallet->name,
            $expense->quantity,
            $expense->amount,
            $expense->total_amount,
        ];
    }
}
