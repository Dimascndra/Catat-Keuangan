@extends('layouts.index')
@section('title', 'Expense List')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Daily Expenses
        @endslot
        @slot('action')
            <a href="{{ route('expenses.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Add New Expense
            </a>
            <a href="{{ route('expenses.reports') }}" class="btn btn-info font-weight-bolder btn-sm ml-2">
                View Reports
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

        <!-- Wallet Tabs -->
        <div class="card card-custom gutter-b">
            <div class="card-header card-header-tabs-line">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @foreach ($wallets as $wallet)
                            <li class="nav-item">
                                <a class="nav-link {{ $activeWalletId == $wallet->id ? 'active' : '' }}"
                                    href="{{ route('expenses.index', ['wallet_id' => $wallet->id]) }}">
                                    <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                    <span class="nav-text">{{ $wallet->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Financial Summary -->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-custom bg-light-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Today</span>
                                        <span class="text-muted font-weight-bold mt-2">Total Hari Ini</span>
                                    </div>
                                    <span class="text-success font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalExpenseToday, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-custom bg-light-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">This Week</span>
                                        <span class="text-muted font-weight-bold mt-2">Total Minggu Ini</span>
                                    </div>
                                    <span class="text-danger font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalExpenseThisWeek, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-custom bg-light-primary">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">This Month</span>
                                        <span class="text-muted font-weight-bold mt-2">Total Bulan Ini</span>
                                    </div>
                                    <span class="text-primary font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalExpenseThisMonth, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Data -->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <form action="{{ route('expenses.index') }}" method="GET">
                    <div class="row align-items-center">
                        <!-- Category -->
                        <div class="col-lg-3 col-md-4 col-sm-12 my-2">
                            <select name="category" class="form-control form-control-solid select2" style="width: 100%;">
                                <option value="">All Categories</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->name }}"
                                        {{ request('category') == $cat->name ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Date Range -->
                        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                            <input type="date" class="form-control form-control-solid" name="start_date"
                                placeholder="Start Date" value="{{ request('start_date') }}" title="Start Date">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                            <input type="date" class="form-control form-control-solid" name="end_date"
                                placeholder="End Date" value="{{ request('end_date') }}" title="End Date">
                        </div>

                        <!-- Search -->
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <div class="input-icon">
                                <input type="text" class="form-control form-control-solid" name="search"
                                    placeholder="Search..." value="{{ request('search') }}">
                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="col-lg-2 col-md-6 col-sm-12 my-2">
                            <div class="d-flex">
                                <button type="submit"
                                    class="btn btn-primary font-weight-bold mr-2 flex-grow-1">Filter</button>
                                <a href="{{ route('expenses.index') }}" class="btn btn-icon btn-light-primary"
                                    title="Reset">
                                    <i class="flaticon2-reload"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Expense List
                        ({{ date('F Y', mktime(0, 0, 0, $currentMonth, 1, $currentYear)) }})
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>
                                    <a
                                        href="{{ route('expenses.index', ['sort' => 'date', 'direction' => $sortField === 'date' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                        Date
                                        @if ($sortField === 'date')
                                            <i class="fa fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </a>
                                </th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>
                                    <a
                                        href="{{ route('expenses.index', ['sort' => 'total_amount', 'direction' => $sortField === 'total_amount' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                        Total
                                        @if ($sortField === 'total_amount')
                                            <i class="fa fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </a>
                                </th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->date->format('d M Y') }}</td>
                                    <td><span
                                            class="label label-lg label-light-primary label-inline font-weight-bold py-4">{{ $expense->category }}</span>
                                    </td>
                                    <td>{{ $expense->description }}</td>
                                    <td>{{ $expense->quantity }}</td>
                                    <td>{{ $expense->formatted_amount }}</td>
                                    <td>{{ $expense->formatted_amount }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>{{ $expense->formatted_total_amount }}</span>
                                            @if ($expense->image_path)
                                                <a href="{{ asset('storage/' . $expense->image_path) }}" target="_blank"
                                                    class="btn btn-icon btn-xs btn-light-success btn-circle ml-2"
                                                    title="View Receipt">
                                                    <i class="flaticon-attachment font-size-sm"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-right pr-0">
                                        <a href="{{ route('expenses.edit', $expense) }}"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
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
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <form action="{{ route('expenses.destroy', $expense) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                <span class="svg-icon svg-icon-md svg-icon-danger">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
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
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">No expenses recorded.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $expenses->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select Category",
                allowClear: true
            });
        });
    </script>
@endsection
