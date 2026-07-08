@extends('layouts.index')
@section('title', 'Ubah Kategori')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Ubah Kategori
        @endslot
        @slot('action')
            <a href="{{ route('categories.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">Back</a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-solid" name="name"
                            value="{{ $category->name }}" required />
                    </div>
                    <div class="form-group">
                        <label>Tipe <span class="text-danger">*</span></label>
                        <select class="form-control form-control-solid select2" id="typeSelect" name="type" required>
                            <option value="expense" {{ $category->type == 'expense' ? 'selected' : '' }}>Expense</option>
                            <option value="income" {{ $category->type == 'income' ? 'selected' : '' }}>Income</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <input type="color" class="form-control form-control-solid" name="color"
                            value="{{ $category->color }}" style="height: 45px" />
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control form-control-solid" name="description">{{ $category->description }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
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
