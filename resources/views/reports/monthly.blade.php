@extends('layouts.index')
@section('title', 'Laporan Bulanan')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Laporan Bulanan
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <form action="{{ route('reports.monthly') }}" method="GET">
                    <div class="form-group row mb-0">
                        <div class="col-lg-3">
                            <label>Year</label>
                            <select name="year" class="form-control">
                                @for ($y = date('Y'); $y >= date('Y') - 5; $y--)
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
                    <h3 class="card-label">Monthly Recap ({{ $year }})</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th class="text-right">Income</th>
                                <th class="text-right">Expense</th>
                                <th class="text-right">Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($monthlyRecap as $month)
                                <tr>
                                    <td>{{ $month['month'] }}</td>
                                    <td class="text-right text-success">{{ number_format($month['income'], 0, ',', '.') }}
                                    </td>
                                    <td class="text-right text-danger">{{ number_format($month['expense'], 0, ',', '.') }}
                                    </td>
                                    <td class="text-right font-weight-bold">
                                        {{ number_format($month['income'] - $month['expense'], 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="font-weight-bold bg-light">
                                <td>TOTAL</td>
                                <td class="text-right">
                                    {{ number_format(collect($monthlyRecap)->sum('income'), 0, ',', '.') }}
                                </td>
                                <td class="text-right">
                                    {{ number_format(collect($monthlyRecap)->sum('expense'), 0, ',', '.') }}
                                </td>
                                <td class="text-right">
                                    {{ number_format(collect($monthlyRecap)->sum('income') - collect($monthlyRecap)->sum('expense'), 0, ',', '.') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
