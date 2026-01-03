@extends('layouts.index')
@section('title', 'Wallets')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            My Wallets
        @endslot
        @slot('action')
            <a href="{{ route('wallets.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Add New Wallet
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

        @if (session('error'))
            <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">{{ session('error') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif

        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card card-custom bg-light-info gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                    Total Balance
                                </a>
                                <p class="text-dark-50">
                                    Total amount across all wallets.
                                </p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <span class="btn btn-info btn-lg font-weight-bold py-2 px-6">
                                    Rp {{ number_format($totalBalance, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($wallets as $wallet)
                <div class="col-xl-4 col-md-6">
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-body pt-4">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <span class="text-dark-75 font-weight-bolder mr-2">{{ $wallet->type ?? 'Wallet' }}</span>
                                <div>
                                    <a href="{{ route('wallets.edit', $wallet) }}"
                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" title="Edit">
                                        <i class="ki ki-bold-edit text-primary"></i>
                                    </a>
                                    <form action="{{ route('wallets.destroy', $wallet) }}" method="POST"
                                        style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-clean btn-hover-light-danger btn-sm btn-icon"
                                            onclick="if(confirm('Delete this wallet?')) this.form.submit();" title="Delete">
                                            <i class="ki ki-close text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-4">{{ $wallet->name }}</a>
                                <span
                                    class="font-weight-bolder font-size-h2 text-dark">{{ $wallet->formatted_balance }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
