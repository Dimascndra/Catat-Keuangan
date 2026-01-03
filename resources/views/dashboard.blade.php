@extends('layouts.index')
@section('title', 'System Reports')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Financial Report System
        @endslot
        @slot('action')
            <a href="{{ route('expenses.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Add Expense
            </a>
            <a href="{{ route('incomes.create') }}" class="btn btn-success font-weight-bolder btn-sm ml-2">
                Add Income
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <!-- Financial Summary -->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-custom bg-light-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Total Income</span>
                                        <span class="text-muted font-weight-bold mt-2">Pemasukan</span>
                                    </div>
                                    <span class="text-success font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalIncome, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-custom bg-light-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Total Expenses</span>
                                        <span class="text-muted font-weight-bold mt-2">Pemakaian</span>
                                    </div>
                                    <span class="text-danger font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalExpense, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-custom bg-light-primary">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Balance</span>
                                        <span class="text-muted font-weight-bold mt-2">Sisa Uang</span>
                                    </div>
                                    <span class="text-primary font-weight-bolder font-size-h3">
                                        Rp {{ number_format($balance, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wallet Balances -->
        <div class="row mb-5">
            @foreach ($wallets as $wallet)
                <div class="col-lg-4 col-xl-3">
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-body pt-4">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <span class="text-dark-75 font-weight-bolder mr-2">{{ $wallet->type }}</span>
                                <a href="{{ route('wallets.edit', $wallet) }}"
                                    class="btn btn-clean btn-hover-light-primary btn-sm btn-icon">
                                    <i class="ki ki-bold-edit text-primary"></i>
                                </a>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-4">
                                    {{ $wallet->name }}
                                </a>
                                <span class="font-weight-bolder font-size-h2 text-dark">
                                    {{ $wallet->formatted_balance }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Budget Realization -->
        <div class="card card-custom gutter-b">
            <div class="card-header border-0 pb-0">
                <h3 class="card-title font-weight-bolder text-dark">Budget Realization ({{ date('F Y') }})</h3>
                <div class="card-toolbar">
                    <a href="{{ route('budgets.index') }}" class="btn btn-light-primary btn-sm font-weight-bold">Manage
                        Budgets</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($budgets as $budget)
                        <div class="col-lg-6 mb-8">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">{{ $budget->category }}</span>
                                <span class="text-muted">{{ 'Rp ' . number_format($budget->spent_amount, 0, ',', '.') }} /
                                    {{ $budget->formatted_amount }}</span>
                            </div>
                            <div class="progress progress-xs mb-2">
                                <div class="progress-bar {{ $budget->progress > 100 ? 'bg-danger' : ($budget->progress > 80 ? 'bg-warning' : 'bg-primary') }}"
                                    role="progressbar" style="width: {{ min(100, $budget->progress) }}%;"
                                    aria-valuenow="{{ $budget->progress }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span
                                class="font-weight-bolder {{ $budget->progress > 100 ? 'text-danger' : 'text-dark' }}">{{ $budget->progress }}%
                                Used</span>
                        </div>
                    @endforeach
                    @if ($budgets->isEmpty())
                        <div class="col-12 text-center text-muted">
                            No budgets set. <a href="{{ route('budgets.create') }}">Set a budget</a> to track your
                            spending.
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Financial Overview ({{ date('F Y') }})</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart_trend" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Expense By Category</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart_category" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Chart Section -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Daily Spending (Last 30 Days)</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart_daily" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Income Sources</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart_income" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">Recent Activity</h3>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="pl-0" style="width: 150px">Date</th>
                                <th style="min-width: 150px">Description</th>
                                <th style="min-width: 120px">Category/Source</th>
                                <th class="text-right" style="min-width: 130px">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentActivity as $activity)
                                <tr>
                                    <td class="pl-0">
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $activity->date->format('d M Y') }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $activity->description ?? '-' }}</span>
                                        <span class="text-muted font-weight-bold">{{ ucfirst($activity->type) }}</span>
                                    </td>
                                    <td>
                                        @if ($activity->type == 'income')
                                            <span
                                                class="label label-lg label-light-success label-inline font-weight-bold py-4">{{ $activity->source }}</span>
                                        @else
                                            <span
                                                class="label label-lg label-light-danger label-inline font-weight-bold py-4">{{ $activity->category }}</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        @if ($activity->type == 'income')
                                            <span class="text-success font-weight-bolder font-size-lg">+
                                                {{ $activity->formatted_amount }}</span>
                                        @else
                                            <span class="text-danger font-weight-bolder font-size-lg">-
                                                {{ $activity->formatted_total_amount }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No recent activity.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Trend Chart
            var optionsTrend = {
                series: [{
                    name: 'Income',
                    data: @json($dataIncome)
                }, {
                    name: 'Expenses',
                    data: @json($dataExpense)
                }],
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                        show: false
                    }
                },
                colors: ['#1BC5BD', '#F64E60'],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    categories: @json($months),
                    tooltip: {
                        enabled: false
                    }
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                },
                tooltip: {
                    y: {
                        formatter: function(value) {
                            return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                }
            };
            var chartTrend = new ApexCharts(document.querySelector("#chart_trend"), optionsTrend);
            chartTrend.render();

            // Category Chart
            var optionsCategory = {
                series: @json($categoryTotals),
                labels: @json($categoryLabels),
                chart: {
                    type: 'donut',
                    height: 350
                },
                colors: ['#3699FF', '#1BC5BD', '#8950FC', '#FFA800', '#F64E60'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 300
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                tooltip: {
                    y: {
                        formatter: function(value) {
                            return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                }
            };
            var chartCategory = new ApexCharts(document.querySelector("#chart_category"), optionsCategory);
            chartCategory.render();

            // Daily Expense Chart
            var optionsDaily = {
                series: [{
                    name: 'Spending',
                    data: @json($dailyTotals)
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: false
                    }
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
                    categories: @json($dailyLabels),
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                },
                fill: {
                    opacity: 1
                },
                colors: ['#F64E60'],
                tooltip: {
                    y: {
                        formatter: function(value) {
                            return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                }
            };
            var chartDaily = new ApexCharts(document.querySelector("#chart_daily"), optionsDaily);
            chartDaily.render();

            // Income Source Chart
            var optionsIncome = {
                series: @json($incomeTotals),
                labels: @json($incomeLabels),
                chart: {
                    type: 'pie',
                    height: 350
                },
                colors: ['#1BC5BD', '#3699FF', '#8950FC', '#FFA800', '#F64E60'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 300
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                tooltip: {
                    y: {
                        formatter: function(value) {
                            return "Rp " + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                }
            };
            var chartIncome = new ApexCharts(document.querySelector("#chart_income"), optionsIncome);
            chartIncome.render();
        });
    </script>
@endsection
