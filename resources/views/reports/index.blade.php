@extends('layouts.index')
@section('title', 'Financial Reports')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Financial Reports
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <!-- Filter & Export Card -->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Filter & Export</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('reports.index') }}" method="GET" id="filterForm">
                    <div class="row align-items-end">
                        <div class="col-lg-4">
                            <label>Start Date</label>
                            <input type="date" class="form-control form-control-solid" name="start_date"
                                value="{{ $startDate }}" />
                        </div>
                        <div class="col-lg-4">
                            <label>End Date</label>
                            <input type="date" class="form-control form-control-solid" name="end_date"
                                value="{{ $endDate }}" />
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary mr-2">Filter</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exportModal">
                                Export
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Main Reports Card -->
        <div class="card card-custom gutter-b">
            <div class="card-header card-header-tabs-line">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab_daily">
                                <span class="nav-icon"><i class="flaticon2-chart"></i></span>
                                <span class="nav-text">Daily Recap</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_category">
                                <span class="nav-icon"><i class="flaticon2-pie-chart-1"></i></span>
                                <span class="nav-text">By Category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_cashflow">
                                <span class="nav-icon"><i class="flaticon2-list-3"></i></span>
                                <span class="nav-text">Cash Flow</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_trends">
                                <span class="nav-icon"><i class="flaticon2-graph"></i></span>
                                <span class="nav-text">Monthly Trends</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_wallet">
                                <span class="nav-icon"><i class="flaticon2-digital-marketing"></i></span>
                                <span class="nav-text">Wallet History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Tab 1: Daily Recap -->
                    <div class="tab-pane fade show active" id="tab_daily" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <canvas id="dailyChart" height="200"></canvas>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Income</th>
                                                <th>Expense</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dailyRecap as $day)
                                                <tr>
                                                    <td>{{ $day['date'] }}</td>
                                                    <td class="text-success">
                                                        {{ number_format($day['income'], 0, ',', '.') }}</td>
                                                    <td class="text-danger">
                                                        {{ number_format($day['expense'], 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Category Breakdown -->
                    <div class="tab-pane fade" id="tab_category" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                                <canvas id="categoryChart" height="200"></canvas>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Count</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categoryRecap as $cat)
                                                <tr>
                                                    <td>{{ $cat->category }}</td>
                                                    <td>{{ $cat->count }}</td>
                                                    <td>{{ number_format($cat->total, 0, ',', '.') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Cash Flow -->
                    <div class="tab-pane fade" id="tab_cashflow" role="tabpanel">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="card card-custom bg-light-primary mb-4">
                                    <div class="card-body">
                                        <h4 class="font-weight-bold">Opening Balance</h4>
                                        <h5 class="text-primary">
                                            Rp {{ number_format($cashFlow['opening_balance'], 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom bg-light-success mb-4">
                                    <div class="card-body">
                                        <h4 class="font-weight-bold">Total Income</h4>
                                        <h5 class="text-success">
                                            Rp {{ number_format($cashFlow['income'], 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom bg-light-danger mb-4">
                                    <div class="card-body">
                                        <h4 class="font-weight-bold">Total Expense</h4>
                                        <h5 class="text-danger">
                                            Rp {{ number_format($cashFlow['expense'], 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-custom bg-light-info mb-4">
                                    <div class="card-body">
                                        <h4 class="font-weight-bold">Closing Balance</h4>
                                        <h5 class="text-info">
                                            Rp {{ number_format($cashFlow['closing_balance'], 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Monthly Trends -->
                    <div class="tab-pane fade" id="tab_trends" role="tabpanel">
                        <canvas id="trendChart" height="150"></canvas>
                    </div>

                    <!-- Tab 5: Wallet History -->
                    <div class="tab-pane fade" id="tab_wallet" role="tabpanel">
                        <form action="{{ route('reports.index') }}" method="GET" class="mb-4">
                            <input type="hidden" name="start_date" value="{{ $startDate }}">
                            <input type="hidden" name="end_date" value="{{ $endDate }}">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Select Wallet:</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-solid" name="wallet_id"
                                        onchange="this.form.submit()">
                                        <option value="">-- Choose Wallet --</option>
                                        @foreach ($wallets as $wallet)
                                            <option value="{{ $wallet->id }}"
                                                {{ $walletId == $wallet->id ? 'selected' : '' }}>
                                                {{ $wallet->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>

                        @if ($walletId)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th class="text-right">Amount</th>
                                            <th class="text-right">Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($walletHistory as $row)
                                            <tr>
                                                <td>{{ $row['date'] instanceof \DateTime ? $row['date']->format('Y-m-d') : $row['date'] }}
                                                </td>
                                                <td>
                                                    <span
                                                        class="label label-inline 
                                                    {{ $row['type'] == 'income' || $row['type'] == 'transfer_in' ? 'label-light-success' : 'label-light-danger' }}">
                                                        {{ strtoupper(str_replace('_', ' ', $row['type'])) }}
                                                    </span>
                                                </td>
                                                <td>{{ $row['description'] }}</td>
                                                <td
                                                    class="text-right {{ $row['amount'] >= 0 ? 'text-success' : 'text-danger' }}">
                                                    {{ number_format($row['amount'], 2) }}
                                                </td>
                                                <td class="text-right font-weight-bold">
                                                    {{ number_format($row['balance'], 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
                                <div class="alert-icon"><i class="flaticon-info"></i></div>
                                <div class="alert-text">Please select a wallet to view its transaction history.</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Export Modal -->
    <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Export Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form action="{{ route('reports.export') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="start_date" value="{{ $startDate }}">
                        <input type="hidden" name="end_date" value="{{ $endDate }}">
                        <div class="form-group">
                            <label>Format <span class="text-danger">*</span></label>
                            <div class="radio-list">
                                <label class="radio radio-solid">
                                    <input type="radio" name="format" value="excel" checked="checked" />
                                    <span></span>
                                    Excel (.xlsx)
                                </label>
                                <label class="radio radio-solid">
                                    <input type="radio" name="format" value="pdf" />
                                    <span></span>
                                    PDF (.pdf)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Daily Chart
        var ctxDaily = document.getElementById('dailyChart').getContext('2d');
        var dailyChart = new Chart(ctxDaily, {
            type: 'bar',
            data: {
                labels: {!! json_encode(array_column($dailyRecap, 'date')) !!},
                datasets: [{
                        label: 'Income',
                        data: {!! json_encode(array_column($dailyRecap, 'income')) !!},
                        backgroundColor: 'rgba(28, 200, 138, 0.5)',
                        borderColor: 'rgba(28, 200, 138, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Expense',
                        data: {!! json_encode(array_column($dailyRecap, 'expense')) !!},
                        backgroundColor: 'rgba(231, 74, 59, 0.5)',
                        borderColor: 'rgba(231, 74, 59, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Category Chart
        var ctxCat = document.getElementById('categoryChart').getContext('2d');
        var categoryChart = new Chart(ctxCat, {
            type: 'pie',
            data: {
                labels: {!! json_encode($categoryRecap->pluck('category')) !!},
                datasets: [{
                    data: {!! json_encode($categoryRecap->pluck('total')) !!},
                    backgroundColor: [
                        '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b',
                        '#858796', '#5a5c69', '#f8f9fc', '#2e59d9', '#17a673'
                    ],
                }]
            }
        });

        // Trend Chart
        var ctxTrend = document.getElementById('trendChart').getContext('2d');
        var trendChart = new Chart(ctxTrend, {
            type: 'line',
            data: {
                labels: {!! json_encode(array_column($monthlyTrends, 'month')) !!},
                datasets: [{
                        label: 'Income',
                        data: {!! json_encode(array_column($monthlyTrends, 'income')) !!},
                        borderColor: 'rgba(28, 200, 138, 1)',
                        fill: false,
                        tension: 0.1
                    },
                    {
                        label: 'Expense',
                        data: {!! json_encode(array_column($monthlyTrends, 'expense')) !!},
                        borderColor: 'rgba(231, 74, 59, 1)',
                        fill: false,
                        tension: 0.1
                    }
                ]
            }
        });
    </script>
@endsection
