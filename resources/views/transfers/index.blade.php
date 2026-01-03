@extends('layouts.index')
@section('title', 'Transfers')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Transfer History
        @endslot
        @slot('action')
            <a href="{{ route('transfers.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                New Transfer
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-interface-5"></i></div>
                <div class="alert-text">{{ session('success') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Recent Transfers</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Date</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Description</th>
                                <th class="text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transfers as $transfer)
                                <tr>
                                    <td>{{ $transfer->date->format('d M Y') }}</td>
                                    <td>
                                        <span class="label label-lg label-light-danger label-inline font-weight-bold">
                                            {{ $transfer->fromWallet->name }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-success label-inline font-weight-bold">
                                            {{ $transfer->toWallet->name }}
                                        </span>
                                    </td>
                                    <td>{{ $transfer->description ?? '-' }}</td>
                                    <td class="text-right font-weight-bolder text-dark">{{ $transfer->formatted_amount }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No transfers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $transfers->links() }}
            </div>
        </div>
    </div>
@endsection
