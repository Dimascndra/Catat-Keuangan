@extends('layouts.index')
@section('title', 'Budget Management')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Budget Management
        @endslot
        @slot('action')
            <a href="{{ route('budgets.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Set New Budget
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-interface-5"></i></div>
                <div class="alert-text">{{ session('success') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif

        <div class="row">
            @foreach ($budgets as $budget)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title font-weight-bolder text-dark">{{ $budget->category }}</h3>
                            <div class="card-toolbar">
                                <a href="{{ route('budgets.edit', $budget) }}"
                                    class="btn btn-icon btn-light-primary btn-sm mr-2">
                                    <i class="flaticon2-pen"></i>
                                </a>
                                <form action="{{ route('budgets.destroy', $budget) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Delete this budget?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-light-danger btn-sm">
                                        <i class="flaticon2-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Spent</span>
                                    <span class="text-muted">{{ 'Rp ' . number_format($budget->spent_amount, 0, ',', '.') }}
                                        / {{ $budget->formatted_amount }}</span>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar {{ $budget->progress > 100 ? 'bg-danger' : ($budget->progress > 80 ? 'bg-warning' : 'bg-primary') }}"
                                        role="progressbar" style="width: {{ min(100, $budget->progress) }}%;"
                                        aria-valuenow="{{ $budget->progress }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span
                                    class="font-weight-bolder {{ $budget->progress > 100 ? 'text-danger' : 'text-dark' }}">{{ $budget->progress }}%
                                    Used</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($budgets->isEmpty())
                <div class="col-12">
                    <div class="alert alert-custom alert-light-warning fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">No budgets set yet. Click "Set New Budget" to start.</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
