<!DOCTYPE html>
<html>

<head>
    <title>Expense Report</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Expense Report</h2>
        <p>Period: {{ $startDate }} to {{ $endDate }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Category</th>
                <th>Description</th>
                <th>Wallet</th>
                <th>Qty</th>
                <th class="text-right">Price</th>
                <th class="text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->date->format('d M Y') }}</td>
                    <td>{{ $expense->category }}</td>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->wallet->name }}</td>
                    <td>{{ $expense->quantity }}</td>
                    <td class="text-right">{{ number_format($expense->amount, 0, ',', '.') }}</td>
                    <td class="text-right">{{ number_format($expense->total_amount, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" class="text-right total">Grand Total</td>
                <td class="text-right total">Rp {{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    <p>Generated on: {{ date('d M Y H:i:s') }}</p>
</body>

</html>
