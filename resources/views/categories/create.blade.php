@extends('layouts.index')
@section('title', 'Tambah Kategori')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Tambah Kategori
        @endslot
        @slot('action')
            <a href="{{ route('categories.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">Back</a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-solid" name="name" required />
                    </div>
                    <div class="form-group">
                        <label>Tipe <span class="text-danger">*</span></label>
                        <select class="form-control form-control-solid select2" id="typeSelect" name="type" required>
                            <option value="expense">Expense</option>
                            <option value="income">Income</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="color" class="form-control form-control-solid" name="color" value="#3699FF"
                            style="height: 45px" />
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control form-control-solid" name="description"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
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
