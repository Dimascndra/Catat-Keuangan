@extends('layouts.index')
@section('title', 'Laporan Mingguan')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Laporan Mingguan
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <form action="{{ route('reports.weekly') }}" method="GET">
                    <div class="form-group row mb-0">
                        <div class="col-lg-3">
                            <label>Month</label>
                            <select name="month" class="form-control">
                                @for ($m = 1; $m <= 12; $m++)
                                    <option value="{{ sprintf('%02d', $m) }}"
                                        {{ $month == sprintf('%02d', $m) ? 'selected' : '' }}>
                                        {{ date('F', mktime(0, 0, 0, $m, 10)) }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Year</label>
                            <select name="year" class="form-control">
                                @for ($y = date('Y') - 1; $y <= date('Y') + 1; $y++)
                                    <option value="{{ $y }}" {{ $year == $y ? 'selected' : '' }}>
                                        {{ $y }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Wallet</label>
                            <select name="wallet_id" class="form-control">
                                <option value="">All Wallets</option>
                                @foreach ($wallets as $wallet)
                                    <option value="{{ $wallet->id }}" {{ $walletId == $wallet->id ? 'selected' : '' }}>
                                        {{ $wallet->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 pt-8">
                            <button type="submit" class="btn btn-primary btn-block">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Weekly Trend Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <div id="chart_weekly_trend"></div>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Weekly Recap</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Week</th>
                                <th class="text-right">Income</th>
                                <th class="text-right">Expense</th>
                                <th class="text-right">Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($weeklyRecap as $week)
                                <tr>
                                    <td>{{ $week['label'] }}</td>
                                    <td class="text-right text-success">{{ number_format($week['income'], 0, ',', '.') }}
                                    </td>
                                    <td class="text-right text-danger">{{ number_format($week['expense'], 0, ',', '.') }}
                                    </td>
                                    <td class="text-right font-weight-bold">
                                        {{ number_format($week['income'] - $week['expense'], 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="font-weight-bold bg-light">
                                <td>TOTAL</td>
                                <td class="text-right">
                                    {{ number_format(collect($weeklyRecap)->sum('income'), 0, ',', '.') }}
                                </td>
                                <td class="text-right">
                                    {{ number_format(collect($weeklyRecap)->sum('expense'), 0, ',', '.') }}
                                </td>
                                <td class="text-right">
                                    {{ number_format(collect($weeklyRecap)->sum('income') - collect($weeklyRecap)->sum('expense'), 0, ',', '.') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var options = {
            series: [{
                name: 'Income',
                data: @json($incomeData)
            }, {
                name: 'Expense',
                data: @json($expenseData)
            }],
            chart: {
                height: 350,
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: @json($chartLabels),
            },
            yaxis: {
                title: {
                    text: 'Amount (Rp)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(value) {
                        return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                    }
                }
            },
            colors: ['#1BC5BD', '#F64E60']
        };

        var chart = new ApexCharts(document.querySelector("#chart_weekly_trend"), options);
        chart.render();
    </script>
@endsection
