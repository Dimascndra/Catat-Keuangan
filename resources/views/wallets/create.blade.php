@extends('layouts.index')
@section('title', 'Add Wallet')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Add Wallet
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
                    <h3 class="card-label">New Wallet Information</h3>
                </div>
            </div>
            <form action="{{ route('wallets.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Wallet Name <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" placeholder="e.g. Bank BCA, Dompet Tunai" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>Type / Category</label>
                            <select class="form-control form-control-solid select2 @error('type') is-invalid @enderror"
                                id="kt_select2_type" name="type">
                                <option value="Cash" {{ old('type') == 'Cash' ? 'selected' : '' }}>Cash (Tunai)</option>
                                <option value="Bank" {{ old('type') == 'Bank' ? 'selected' : '' }}>Bank Account</option>
                                <option value="E-Wallet" {{ old('type') == 'E-Wallet' ? 'selected' : '' }}>E-Wallet
                                    (Gopay/Ovo/etc)</option>
                                <option value="Credit Card" {{ old('type') == 'Credit Card' ? 'selected' : '' }}>Credit Card
                                </option>
                                <option value="Investment" {{ old('type') == 'Investment' ? 'selected' : '' }}>Investment
                                </option>
                                <option value="Other" {{ old('type') == 'Other' ? 'selected' : '' }}>Other</option>
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
                            name="initial_balance" id="initial_balance" placeholder="0"
                            value="{{ old('initial_balance', 0) }}" step="0.01" min="0" required />
                        <span class="form-text text-muted">Starting balance for this wallet.</span>
                        @error('initial_balance')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
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
