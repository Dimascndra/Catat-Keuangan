@extends('layouts.index')
@section('title', 'Edit Debt/Receivable')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Edit Debt/Receivable
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
                    <h3 class="card-label">Edit Record</h3>
                </div>
            </div>
            <form action="{{ route('debts.update', $debt) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Type</label>
                            <select class="form-control form-control-solid select2" id="typeSelect" disabled>
                                <option value="payable" {{ $debt->type == 'payable' ? 'selected' : '' }}>Hutang (I owe
                                    someone)</option>
                                <option value="receivable" {{ $debt->type == 'receivable' ? 'selected' : '' }}>Piutang
                                    (Someone owes me)</option>
                            </select>
                            <span class="form-text text-muted">Type cannot be changed.</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Name (Person/Entity) <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name', $debt->name) }}" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Amount (Rp)</label>
                            <input type="number" class="form-control form-control-solid" value="{{ $debt->amount }}"
                                disabled />
                            <span class="form-text text-muted">Amount cannot be edited directly to ensure payment history
                                integrity.</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Due Date</label>
                            <input type="date"
                                class="form-control form-control-solid @error('due_date') is-invalid @enderror"
                                name="due_date" value="{{ old('due_date', optional($debt->due_date)->format('Y-m-d')) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control form-control-solid" name="description" rows="3">{{ old('description', $debt->description) }}</textarea>
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
            $('#typeSelect').select2({
                placeholder: "Select Type",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
        });
    </script>
@endsection
