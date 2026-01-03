@extends('layouts.index')
@section('title', 'Add Expense')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Add Expense
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
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">New Expense Entry</h3>
                </div>
            </div>
            <form action="{{ route('expenses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Date <span class="text-danger">*</span></label>
                            <input type="date"
                                class="form-control form-control-solid @error('date') is-invalid @enderror" name="date"
                                value="{{ old('date', date('Y-m-d')) }}" required />
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
                                        {{ old('wallet_id') == $wallet->id ? 'selected' : '' }}>
                                        {{ $wallet->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('wallet_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Category <span class="text-danger">*</span></label>
                            <select class="form-control form-control-solid select2 @error('category') is-invalid @enderror"
                                id="categorySelect" name="category" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}"
                                        {{ old('category') == $category->name ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description <span class="text-danger">*</span></label>
                        <input type="text"
                            class="form-control form-control-solid @error('description') is-invalid @enderror"
                            name="description" placeholder="Enter description" value="{{ old('description') }}" required />
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>Quantity <span class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control form-control-solid @error('quantity') is-invalid @enderror"
                                name="quantity" id="quantity" placeholder="1" value="{{ old('quantity', 1) }}"
                                min="1" required />
                            @error('quantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Amount (Rp) <span class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control form-control-solid @error('amount') is-invalid @enderror" name="amount"
                                id="amount" placeholder="0" value="{{ old('amount') }}" step="0.01" min="0"
                                required />
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Total Amount (Rp)</label>
                            <input type="text" class="form-control form-control-solid" id="total_display" readonly
                                value="0" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Receipt/Proof (Optional)</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="customFile"
                                accept="image/*" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
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
            const quantityInput = document.getElementById('quantity');
            const amountInput = document.getElementById('amount');
            const totalDisplay = document.getElementById('total_display');

            function calculateTotal() {
                const qty = parseFloat(quantityInput.value) || 0;
                const amt = parseFloat(amountInput.value) || 0;
                const total = qty * amt;

                // Format currency roughly for display
                totalDisplay.value = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(total);
            }

            quantityInput.addEventListener('input', calculateTotal);
            amountInput.addEventListener('input', calculateTotal);

            // Initial calculation
            calculateTotal();
        });
    </script>
@endsection
