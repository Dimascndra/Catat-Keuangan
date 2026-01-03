@extends('layouts.index')
@section('title', 'Edit Wallet')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Edit Wallet
        @endslot
        @slot('action')
            <a href="{{ route('wallets.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
                Back to List
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Edit Wallet: {{ $wallet->name }}</h3>
                </div>
            </div>
            <form action="{{ route('wallets.update', $wallet) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Wallet Name <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name', $wallet->name) }}" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>Type / Category</label>
                            <select class="form-control form-control-solid select2 @error('type') is-invalid @enderror"
                                id="kt_select2_type" name="type">
                                <option value="Cash" {{ old('type', $wallet->type) == 'Cash' ? 'selected' : '' }}>Cash
                                    (Tunai)</option>
                                <option value="Bank" {{ old('type', $wallet->type) == 'Bank' ? 'selected' : '' }}>Bank
                                    Account</option>
                                <option value="E-Wallet" {{ old('type', $wallet->type) == 'E-Wallet' ? 'selected' : '' }}>
                                    E-Wallet (Gopay/Ovo/etc)</option>
                                <option value="Credit Card"
                                    {{ old('type', $wallet->type) == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
                                <option value="Investment"
                                    {{ old('type', $wallet->type) == 'Investment' ? 'selected' : '' }}>Investment</option>
                                <option value="Other" {{ old('type', $wallet->type) == 'Other' ? 'selected' : '' }}>Other
                                </option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Initial Balance (Rp) <span class="text-danger">*</span></label>
                        <input type="number"
                            class="form-control form-control-solid @error('initial_balance') is-invalid @enderror"
                            name="initial_balance" id="initial_balance"
                            value="{{ old('initial_balance', $wallet->initial_balance) }}" step="0.01" min="0"
                            required />
                        <span class="form-text text-muted">Modify initial balance ONLY if it was incorrect. Current Balance
                            will be adjusted by the difference.</span>
                        @error('initial_balance')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Current Balance (Read-Only)</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $wallet->formatted_balance }}" disabled />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#kt_select2_type').select2({
                placeholder: "Select a type",
                allowClear: false
            });
        });
    </script>
@endsection
