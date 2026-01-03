@extends('layouts.index')
@section('title', 'Add Category')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Add Category
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
                        <label>Type <span class="text-danger">*</span></label>
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
                        <label>Description</label>
                        <textarea class="form-control form-control-solid" name="description"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
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
