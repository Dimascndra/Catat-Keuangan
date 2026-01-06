@extends('layouts.index')
@section('title', 'Laporan Harian')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Laporan Harian
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <form action="{{ route('reports.daily') }}" method="GET">
                    <div class="form-group row mb-0">
                        <div class="col-lg-3">
                            <label>Start Date</label>
                            <input type="date" class="form-control" name="start_date" value="{{ $startDate }}">
                        </div>
                        <div class="col-lg-3">
                            <label>End Date</label>
                            <input type="date" class="form-control" name="end_date" value="{{ $endDate }}">
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
                    <h3 class="card-label">Daily Recap</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th class="text-right">Income</th>
                                <th class="text-right">Expense</th>
                                <th class="text-right">Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dailyRecap as $day)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($day['date'])->format('d M Y') }}</td>
                                    <td class="text-right text-success">{{ number_format($day['income'], 0, ',', '.') }}
                                    </td>
                                    <td class="text-right text-danger">{{ number_format($day['expense'], 0, ',', '.') }}
                                    </td>
                                    <td class="text-right font-weight-bold">
                                        {{ number_format($day['income'] - $day['expense'], 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="font-weight-bold bg-light">
                                <td>TOTAL</td>
                                <td class="text-right">
                                    {{ number_format(collect($dailyRecap)->sum('income'), 0, ',', '.') }}
                                </td>
                                <td class="text-right">
                                    {{ number_format(collect($dailyRecap)->sum('expense'), 0, ',', '.') }}
                                </td>
                                <td class="text-right">
                                    {{ number_format(collect($dailyRecap)->sum('income') - collect($dailyRecap)->sum('expense'), 0, ',', '.') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
