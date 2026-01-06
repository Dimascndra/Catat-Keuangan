@extends('layouts.index')
@section('title', 'Laporan Kategori')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Laporan Kategori
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <form action="{{ route('reports.category') }}" method="GET">
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
                    <h3 class="card-label">Expense by Category</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th class="text-right">Total Expense</th>
                                <th class="text-right text-center" style="width: 15%">Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $grandTotal = $categories->sum('total'); @endphp
                            @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ $cat->category }}</td>
                                    <td class="text-right text-danger">{{ number_format($cat->total, 0, ',', '.') }}</td>
                                    <td class="text-center">
                                        {{ $grandTotal > 0 ? number_format(($cat->total / $grandTotal) * 100, 1) : 0 }}%
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="font-weight-bold bg-light">
                                <td>TOTAL</td>
                                <td class="text-right">{{ number_format($grandTotal, 0, ',', '.') }}</td>
                                <td class="text-center">100%</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
