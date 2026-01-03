@extends('layouts.index')
@section('title', 'Add Debt/Receivable')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Add Debt/Receivable
        @endslot
        @slot('action')
            <a href="{{ route('debts.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
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
                    <h3 class="card-label">New Record</h3>
                </div>
            </div>
            <form action="{{ route('debts.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Type <span class="text-danger">*</span></label>
                            <select class="form-control form-control-solid select2" id="typeSelect" name="type" required>
                                <option value="payable" {{ old('type') == 'payable' ? 'selected' : '' }}>Hutang (I owe
                                    someone)</option>
                                <option value="receivable" {{ old('type') == 'receivable' ? 'selected' : '' }}>Piutang
                                    (Someone owes me)</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Name (Person/Entity) <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"
                                placeholder="E.g. John Doe, Bank XYZ" value="{{ old('name') }}" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Amount (Rp) <span class="text-danger">*</span></label>
                            <input type="number"
                                class="form-control form-control-solid @error('amount') is-invalid @enderror" name="amount"
                                id="amount" placeholder="0" value="{{ old('amount') }}" step="0.01" min="0"
                                required />
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <span class="form-text text-muted" id="amount_display"></span>
                        </div>
                        <div class="col-lg-6">
                            <label>Due Date</label>
                            <input type="date"
                                class="form-control form-control-solid @error('due_date') is-invalid @enderror"
                                name="due_date" value="{{ old('due_date') }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control form-control-solid" name="description" rows="3">{{ old('description') }}</textarea>
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
            $('#typeSelect').select2({
                placeholder: "Select Type",
                allowClear: false,
                minimumResultsForSearch: Infinity
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
