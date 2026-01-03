@extends('layouts.index')
@section('title', 'Set Budget')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Set New Budget
        @endslot
        @slot('action')
            <a href="{{ route('budgets.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
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
                    <h3 class="card-label">Set Monthly Limit</h3>
                </div>
            </div>
            <form action="{{ route('budgets.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Category <span class="text-danger">*</span></label>
                            <select class="form-control form-control-solid select2 @error('category') is-invalid @enderror"
                                id="kt_select2_category" name="category" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}"
                                        {{ old('category') == $category->name ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <span class="form-text text-muted">You can only set one budget per category. Categories with
                                existing budgets are excluded.</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Monthly Limit (Rp) <span class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control form-control-solid @error('amount') is-invalid @enderror" name="amount"
                                id="amount" placeholder="0" value="{{ old('amount') }}" step="0.01" min="0"
                                required />
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <span class="form-text text-muted" id="amount_display"></span>
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
            $('#kt_select2_category').select2({
                placeholder: "Select Category",
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
