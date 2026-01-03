@extends('layouts.index')
@section('title', 'Edit Income')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Edit Income
        @endslot
        @slot('action')
            <a href="{{ route('incomes.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
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
                    <h3 class="card-label">Edit Income Entry</h3>
                </div>
            </div>
            <form action="{{ route('incomes.update', $income) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Date <span class="text-danger">*</span></label>
                            <input type="date"
                                class="form-control form-control-solid @error('date') is-invalid @enderror" name="date"
                                value="{{ old('date', $income->date->format('Y-m-d')) }}" required />
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Wallet <span class="text-danger">*</span></label>
                            <select class="form-control form-control-solid select2 @error('wallet_id') is-invalid @enderror"
                                id="kt_select2_wallet" name="wallet_id" required>
                                @foreach ($wallets as $wallet)
                                    <option value="{{ $wallet->id }}"
                                        {{ old('wallet_id', $income->wallet_id) == $wallet->id ? 'selected' : '' }}>
                                        {{ $wallet->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('wallet_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Source <span class="text-danger">*</span></label>
                            <input list="income-sources"
                                class="form-control form-control-solid @error('source') is-invalid @enderror" name="source"
                                value="{{ old('source', $income->source) }}" placeholder="Select or type source" required />
                            <datalist id="income-sources">
                                @foreach ($sources as $source)
                                    <option value="{{ $source }}">
                                @endforeach
                            </datalist>
                            @error('source')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Category <span class="text-danger">*</span></label>
                        <select class="form-control form-control-solid select2 @error('category') is-invalid @enderror"
                            id="categorySelect" name="category" required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}"
                                    {{ old('category', $income->category) == $category->name ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text"
                            class="form-control form-control-solid @error('description') is-invalid @enderror"
                            name="description" placeholder="Optional details"
                            value="{{ old('description', $income->description) }}" />
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Amount (Rp) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control form-control-solid @error('amount') is-invalid @enderror"
                            name="amount" id="amount" placeholder="0" value="{{ old('amount', $income->amount) }}"
                            step="0.01" min="0" required />
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <span class="form-text text-muted" id="amount_display"></span>
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
            $('#kt_select2_wallet').select2({
                placeholder: "Select Wallet",
                allowClear: false
            });
            $('#categorySelect').select2({
                placeholder: "Select Category",
                allowClear: false
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const amountInput = document.getElementById('amount');
            const amountDisplay = document.getElementById('amount_display');

            function updateDisplay() {
                const val = parseFloat(amountInput.value) || 0;
                amountDisplay.textContent = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(val);
            }

            amountInput.addEventListener('input', updateDisplay);
            updateDisplay();
        });
    </script>
@endsection
