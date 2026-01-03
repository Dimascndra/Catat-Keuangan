@extends('layouts.index')
@section('title', 'Expense Reports')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Expense Reports
        @endslot
        @slot('action')
            <a href="{{ route('expenses.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
                Back to List
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- Daily Recap -->
            <div class="col-lg-6">
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
                                        <th class="text-right">Total Expense</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $grandTotalDaily = 0; @endphp
                                    @forelse($dailyRecap as $day)
                                        @php $grandTotalDaily += $day->total; @endphp
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($day->date)->format('d M Y') }}</td>
                                            <td class="text-right">Rp {{ number_format($day->total, 0, ',', '.') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center text-muted">No data available.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr class="font-weight-bold">
                                        <td>TOTAL</td>
                                        <td class="text-right">Rp {{ number_format($grandTotalDaily, 0, ',', '.') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Recap -->
            <div class="col-lg-6">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Category Recap</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th class="text-center">Transactions</th>
                                        <th class="text-right">Total Expense</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $grandTotalCategory = 0; @endphp
                                    @forelse($categoryRecap as $cat)
                                        @php $grandTotalCategory += $cat->total; @endphp
                                        <tr>
                                            <td>{{ $cat->category }}</td>
                                            <td class="text-center">{{ $cat->count }}</td>
                                            <td class="text-right">Rp {{ number_format($cat->total, 0, ',', '.') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center text-muted">No data available.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr class="font-weight-bold">
                                        <td colspan="2">TOTAL</td>
                                        <td class="text-right">Rp {{ number_format($grandTotalCategory, 0, ',', '.') }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
