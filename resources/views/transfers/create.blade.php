@extends('layouts.index')
@section('title', 'New Transfer')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            New Transfer
        @endslot
        @slot('action')
            <a href="{{ route('transfers.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
                Back to List
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
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
                    <h3 class="card-label">Transfer Funds</h3>
                </div>
            </div>
            <form action="{{ route('transfers.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>From Wallet <span class="text-danger">*</span></label>
                            <select
                                class="form-control form-control-solid select2 @error('from_wallet_id') is-invalid @enderror"
                                id="kt_select2_from" name="from_wallet_id" required>
                                <option value="">Select Source Wallet</option>
                                @foreach ($wallets as $wallet)
                                    <option value="{{ $wallet->id }}"
                                        {{ old('from_wallet_id') == $wallet->id ? 'selected' : '' }}>
                                        {{ $wallet->name }} ({{ $wallet->formatted_balance }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>To Wallet <span class="text-danger">*</span></label>
                            <select
                                class="form-control form-control-solid select2 @error('to_wallet_id') is-invalid @enderror"
                                id="kt_select2_to" name="to_wallet_id" required>
                                <option value="">Select Target Wallet</option>
                                @foreach ($wallets as $wallet)
                                    <option value="{{ $wallet->id }}"
                                        {{ old('to_wallet_id') == $wallet->id ? 'selected' : '' }}>
                                        {{ $wallet->name }} ({{ $wallet->formatted_balance }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Date <span class="text-danger">*</span></label>
                            <input type="date"
                                class="form-control form-control-solid @error('date') is-invalid @enderror" name="date"
                                value="{{ old('date', date('Y-m-d')) }}" required />
                        </div>
                        <div class="col-lg-6">
                            <label>Amount (Rp) <span class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control form-control-solid @error('amount') is-invalid @enderror" name="amount"
                                id="amount" placeholder="0" value="{{ old('amount') }}" step="0.01" min="0"
                                required />
                            <span class="form-text text-muted" id="amount_display"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control form-control-solid" name="description"
                            placeholder="Transfer details" value="{{ old('description') }}" />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Transfer</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#kt_select2_from').select2({
                placeholder: "Select Source Wallet",
                allowClear: true
            });
            $('#kt_select2_to').select2({
                placeholder: "Select Target Wallet",
                allowClear: true
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const amountInput = document.getElementById('amount');
            const amountDisplay = document.getElementById('amount_display');

            amountInput.addEventListener('input', function() {
                const val = parseFloat(this.value) || 0;
                amountDisplay.textContent = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(val);
            });
        });
    </script>
@endsection
