@extends('layouts.index')
@section('title', 'Categories')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Categories
        @endslot
        @slot('action')
            <a href="{{ route('categories.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Add New Category
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                <div class="alert-text">{{ session('success') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i
                                class="ki ki-close"></i></span></button>
                </div>
            </div>
        @endif

        <div class="card card-custom gutter-b">
            <div class="card-body">
                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                    <thead>
                        <tr class="text-left">
                            <th>Name</th>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Description</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <span
                                        class="label label-lg label-inline font-weight-bold py-4
                                        {{ $category->type == 'income' ? 'label-light-success' : 'label-light-danger' }}">
                                        {{ ucfirst($category->type) }}
                                    </span>
                                </td>
                                <td>
                                    <span class="symbol symbol-30 symbol-circle"
                                        style="background-color: {{ $category->color ?? '#ccc' }}">
                                        <span class="symbol-label"></span>
                                    </span>
                                </td>
                                <td>{{ $category->description }}</td>
                                <td class="text-right">
                                    <a href="{{ route('categories.edit', $category) }}"
                                        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                        <span class="svg-icon svg-icon-md svg-icon-primary"><i
                                                class="flaticon-edit"></i></span>
                                    </a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">
                                            <span class="svg-icon svg-icon-md svg-icon-danger"><i
                                                    class="flaticon-delete"></i></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
