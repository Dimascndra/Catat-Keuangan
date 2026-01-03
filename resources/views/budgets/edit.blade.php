@extends('layouts.index')
@section('title', 'Edit Budget')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Edit Budget
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
                    <h3 class="card-label">Edit Limit for {{ $budget->category }}</h3>
                </div>
            </div>
            <form action="{{ route('budgets.update', $budget) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Category</label>
                            <input type="text" class="form-control form-control-solid" value="{{ $budget->category }}"
                                disabled />
                            <span class="form-text text-muted">Category cannot be changed. Delete and re-create if
                                needed.</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Monthly Limit (Rp) <span class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control form-control-solid @error('amount') is-invalid @enderror" name="amount"
                                id="amount" placeholder="0" value="{{ old('amount', $budget->amount) }}" step="0.01"
                                min="0" required />
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <span class="form-text text-muted" id="amount_display"></span>
                        </div>
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
