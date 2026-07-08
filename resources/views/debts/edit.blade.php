@extends('layouts.index')
@section('title', 'Ubah Utang/Piutang/Receivable')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Ubah Utang/Piutang/Receivable
        @endslot
        @slot('action')
            <a href="{{ route('debts.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
                Kembali ke Daftar
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Ubah Record</h3>
                </div>
            </div>
            <form action="{{ route('debts.update', $debt) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Tipe</label>
                            <select class="form-control form-control-solid select2" id="typeSelect" disabled>
                                <option value="payable" {{ $debt->type == 'payable' ? 'selected' : '' }}>Hutang (I owe
                                    someone)</option>
                                <option value="receivable" {{ $debt->type == 'receivable' ? 'selected' : '' }}>Piutang
                                    (Someone owes me)</option>
                            </select>
                            <span class="form-text text-muted">Tipe cannot be changed.</span>
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
                            <label>Nominal (Rp)</label>
                            <input type="number" class="form-control form-control-solid" value="{{ $debt->amount }}"
                                disabled />
                            <span class="form-text text-muted">Nominal cannot be edited directly to ensure payment history
                                integrity.</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Jatuh Tempo</label>
                            <input type="date"
                                class="form-control form-control-solid @error('due_date') is-invalid @enderror"
                                name="due_date" value="{{ old('due_date', optional($debt->due_date)->format('Y-m-d')) }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control form-control-solid" name="description" rows="3">{{ old('description', $debt->description) }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#typeSelect').select2({
                placeholder: "Select Tipe",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
        });
    </script>
@endsection
