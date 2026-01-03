@extends('layouts.index')
@section('title', 'Income List')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Income Sources
        @endslot
        @slot('action')
            <a href="{{ route('incomes.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Add New Income
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

        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card card-custom bg-light-success gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                    Total Income ({{ date('F') }})
                                </a>
                                <p class="text-dark-50">
                                    Total amount collected from all sources.
                                </p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <span class="btn btn-warning btn-lg font-weight-bold py-2 px-6">
                                    Rp {{ number_format($totalIncome, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Income History ({{ date('F Y') }})</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Date</th>
                                <th>Source</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($incomes as $income)
                                <tr>
                                    <td>{{ $income->date->format('d M Y') }}</td>
                                    <td><span
                                            class="label label-lg label-light-success label-inline font-weight-bold py-4">{{ $income->source }}</span>
                                    </td>
                                    <td>{{ $income->description ?? '-' }}</td>
                                    <td class="font-weight-bolder text-success">{{ $income->formatted_amount }}</td>
                                    <td class="text-right pr-0">
                                        <a href="{{ route('incomes.edit', $income) }}"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114732 12.1704122,4.68075471 12.453976,4.41323195 L18.0687648,1.22912442 C18.7302484,0.854964648 19.5702229,1.10757788 19.9272379,1.7857418 C20.1068665,2.12662955 20.1976079,2.50529882 20.1976079,2.89066665 L20.1976079,15.1438302 C20.1976079,15.8929947 19.5786358,16.5 18.8294713,16.5 L12.2674799,16.5 C12.2674799,16.5 12.2674799,17.6565196 12.2674799,18.2323597 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(16.103063, 8.864705) rotate(-270.000000) translate(-16.103063, -8.864705) " />
                                                        <path
                                                            d="M6.71185332,6.7610573 L6.9627721,19.5078926 C6.97127448,19.9070386 6.80211565,20.2882586 6.51868351,20.5562098 L0.9038947,23.7403173 C0.242410103,24.1144771 -0.5975644,23.8618639 -0.954579366,23.1836999 C-1.13420803,22.8428122 -1.22494936,22.4641429 -1.22494936,22.0787751 L-1.22494936,9.82561153 C-1.22494936,9.07644703 -0.60597725,8.46944173 0.14318725,8.46944173 L6.71185332,8.46944173 C6.71185332,8.46944173 6.71185332,7.31292203 6.71185332,6.7610573 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                            transform="translate(2.872856, 16.104880) rotate(-270.000000) translate(-2.872856, -16.104880) " />
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>
                                        <form action="{{ route('incomes.destroy', $income) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                                onclick="return confirm('Delete this income?');">
                                                <span class="svg-icon svg-icon-md svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No income records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $incomes->links() }}
            </div>
        </div>
    </div>
@endsection
