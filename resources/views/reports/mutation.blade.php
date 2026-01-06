@extends('layouts.index')
@section('title', 'Mutasi Saldo')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Mutasi Saldo
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <form action="{{ route('reports.mutation') }}" method="GET">
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
                    <h3 class="card-label">Transaction History</h3>
                </div>
                <div class="card-toolbar">
                    <span class="label label-xl label-light-primary label-inline font-weight-bold">
                        Opening Balance: Rp {{ number_format($openingBalance, 0, ',', '.') }}
                    </span>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Category / Description</th>
                                <th class="text-right">Amount (IDR)</th>
                                <th class="text-right">Balance (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mutationHistory as $item)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                                    <td>
                                        <span class="label label-inline label-light-{{ $item->class }} font-weight-bold">
                                            {{ $item->type }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="font-weight-bold">{{ $item->category }}</div>
                                        <div class="text-muted font-size-sm">{{ $item->description }}</div>
                                    </td>
                                    <td
                                        class="text-right font-weight-bold {{ $item->amount < 0 ? 'text-danger' : 'text-success' }}">
                                        {{ number_format($item->amount, 0, ',', '.') }}
                                    </td>
                                    <td class="text-right font-weight-bold text-dark">
                                        {{ number_format($item->balance, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($mutationHistory) == 0)
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No transactions found in this period.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
