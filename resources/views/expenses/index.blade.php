@php
    $wallets = \App\Models\Wallet::all();
    $categories = \App\Models\Category::where('type', 'expense')->get();
    
    $monthsId = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni',
        7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];
    $formattedDate = ($monthsId[(int)$currentMonth] ?? date('F', mktime(0,0,0,$currentMonth,1))) . ' ' . $currentYear;
@endphp

@extends('layouts.index')
@section('title', 'Daftar Pengeluaran')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Pengeluaran Harian
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mr-2 mb-2 mb-sm-0" data-toggle="modal" data-target="#createExpenseModal">
                    Tambah Pengeluaran
                </button>
                <a href="{{ route('expenses.reports') }}" class="btn btn-info font-weight-bolder btn-sm mb-2 mb-sm-0">
                    Lihat Laporan
                </a>
            </div>
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
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="card card-custom bg-light-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Hari Ini</span>
                                        <span class="text-muted font-weight-bold mt-2">Total Hari Ini</span>
                                    </div>
                                    <span class="text-success font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalExpenseToday, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="card card-custom bg-light-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Minggu Ini</span>
                                        <span class="text-muted font-weight-bold mt-2">Total Minggu Ini</span>
                                    </div>
                                    <span class="text-danger font-weight-bolder font-size-h3">
                                        Rp {{ number_format($totalExpenseThisWeek, 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-custom bg-light-primary">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-h5">Bulan Ini</span>
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
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->name }}"
                                        {{ request('category') == $cat->name ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                             </select>
                        </div>

                        <!-- Tanggal Range -->
                        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                            <input type="date" class="form-control form-control-solid" name="start_date"
                                placeholder="Tanggal Mulai" value="{{ request('start_date') }}" title="Tanggal Mulai">
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 my-2">
                            <input type="date" class="form-control form-control-solid" name="end_date"
                                placeholder="Tanggal Akhir" value="{{ request('end_date') }}" title="Tanggal Akhir">
                        </div>

                        <!-- Cari -->
                        <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                            <div class="input-icon">
                                <input type="text" class="form-control form-control-solid" name="search"
                                    placeholder="Cari..." value="{{ request('search') }}">
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
                    <h3 class="card-label">Daftar Pengeluaran
                                        ({{ $formattedDate }})</h3>
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
                                        Tanggal
                                        @if ($sortField === 'date')
                                            <i class="fa fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </a>
                                </th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Quantity</th>
                                <th>Nominal</th>
                                <th>
                                    <a
                                        href="{{ route('expenses.index', ['sort' => 'total_amount', 'direction' => $sortField === 'total_amount' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                        Total
                                        @if ($sortField === 'total_amount')
                                            <i class="fa fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </a>
                                </th>
                                <th>Terakhir Diperbarui</th>
                                <th class="text-right">Aksi</th>
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
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span>{{ $expense->formatted_total_amount }}</span>
                                            @if ($expense->image_path)
                                                <button type="button" 
                                                    class="btn btn-icon btn-xs btn-light-info btn-circle ml-2 btn-preview-receipt"
                                                    data-toggle="modal"
                                                    data-target="#previewReceiptModal"
                                                    data-image="{{ asset('storage/' . $expense->image_path) }}"
                                                    title="Pratinjau Bukti">
                                                    <i class="fa fa-eye font-size-xs"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $expense->updated_at ? $expense->updated_at->format('d M Y H:i') : '-' }}</td>
                                    <td class="text-right pr-0">
                                        <button type="button"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3 btn-edit-expense"
                                            data-toggle="modal"
                                            data-target="#editExpenseModal"
                                            data-id="{{ $expense->id }}"
                                            data-date="{{ $expense->date->format('Y-m-d') }}"
                                            data-wallet-id="{{ $expense->wallet_id }}"
                                            data-category="{{ $expense->category }}"
                                            data-description="{{ $expense->description }}"
                                            data-quantity="{{ $expense->quantity }}"
                                            data-amount="{{ (float)$expense->amount }}"
                                            data-image="{{ $expense->image_path ? asset('storage/' . $expense->image_path) : '' }}"
                                            title="Ubah">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <i class="flaticon-edit"></i>
                                            </span>
                                        </button>
                                        <form action="{{ route('expenses.destroy', $expense) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengeluaran ini?');">
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
                                    <td colspan="7" class="text-center text-muted">Tidak ada data pengeluaran.</td>
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

    <!-- Modal Edit Pengeluaran -->
    <div class="modal fade" id="editExpenseModal" tabindex="-1" role="dialog" aria-labelledby="editExpenseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editExpenseModalLabel">Ubah Pengeluaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert" style="background-color: #ffcccc; color: red; padding: 10px; margin-bottom: 15px; border-radius: 5px; margin-left: 15px; margin-right: 15px;">
                        <div class="alert-text">
                            <strong>Oops! Ada masalah dengan inputan Anda:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form id="editExpenseForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Tanggal <span class="text-danger">*</span></label>
                                <input type="date" id="edit_expense_date" name="date" class="form-control form-control-solid" required />
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Wallet <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" id="edit_expense_wallet_id" name="wallet_id" required>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label>Kategori <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" id="edit_expense_category" name="category" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <input type="text" id="edit_expense_description" name="description" class="form-control form-control-solid" required />
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Quantity <span class="text-danger">*</span></label>
                                <input type="number" id="edit_expense_quantity" name="quantity" class="form-control form-control-solid" min="1" required />
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Nominal (Rp) <span class="text-danger">*</span></label>
                                <input type="number" id="edit_expense_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                            </div>
                            <div class="col-12 col-md-4">
                                <label>Total Nominal (Rp)</label>
                                <input type="text" id="edit_expense_total_display" class="form-control form-control-solid" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nota/Bukti (Opsional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="edit_expense_image" accept="image/*" />
                                <label class="custom-file-label" for="edit_expense_image" id="edit_expense_image_label">Pilih berkas</label>
                            </div>
                            @error('image')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                            <span class="form-text text-muted">Format gambar (jpg, jpeg, png, dll.), maksimal ukuran berkas: 50MB.</span>
                            <div class="mt-2" id="edit_expense_current_image_container" style="display:none;">
                                <span class="text-muted">Nota Saat Ini:</span>
                                <a href="#" id="edit_expense_current_image_link" target="_blank" class="text-primary font-weight-bold ml-1">Lihat Gambar</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pengeluaran -->
    <div class="modal fade" id="createExpenseModal" tabindex="-1" role="dialog" aria-labelledby="createExpenseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createExpenseModalLabel">Tambah Pengeluaran Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert" style="background-color: #ffcccc; color: red; padding: 10px; margin-bottom: 15px; border-radius: 5px; margin-left: 15px; margin-right: 15px;">
                        <div class="alert-text">
                            <strong>Oops! Ada masalah dengan inputan Anda:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form action="{{ route('expenses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Tanggal <span class="text-danger">*</span></label>
                                <input type="date" name="date" class="form-control form-control-solid" value="{{ date('Y-m-d') }}" required />
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Buku Kas <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" name="wallet_id" required>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label>Kategori <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" name="category" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <input type="text" name="description" class="form-control form-control-solid" placeholder="Keterangan pengeluaran" required />
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Quantity <span class="text-danger">*</span></label>
                                <input type="number" id="create_expense_quantity" name="quantity" class="form-control form-control-solid" value="1" min="1" required />
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Nominal (Rp) <span class="text-danger">*</span></label>
                                <input type="number" id="create_expense_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                            </div>
                            <div class="col-12 col-md-4">
                                <label>Total Nominal (Rp)</label>
                                <input type="text" id="create_expense_total_display" class="form-control form-control-solid" readonly value="Rp 0,00" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nota/Bukti (Opsional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="create_expense_image" accept="image/*" />
                                <label class="custom-file-label" for="create_expense_image" id="create_expense_image_label">Pilih berkas</label>
                            </div>
                            @error('image')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                            @enderror
                            <span class="form-text text-muted">Format gambar (jpg, jpeg, png, dll.), maksimal ukuran berkas: 50MB.</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pratinjau Bukti -->
    <div class="modal fade" id="previewReceiptModal" tabindex="-1" role="dialog" aria-labelledby="previewReceiptModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewReceiptModalLabel">Bukti Pengeluaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="receiptPreviewImage" src="" class="img-fluid rounded" style="max-height: 500px;" alt="Bukti Pengeluaran" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a id="receiptDownloadLink" href="" download class="btn btn-primary">Unduh Gambar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Pilih Kategori",
                allowClear: true
            });

            function formatCurrency(val) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(val);
            }

            function recalculateTotal() {
                var qty = parseInt($('#edit_expense_quantity').val()) || 0;
                var amt = parseFloat($('#edit_expense_amount').val()) || 0;
                var total = qty * amt;
                $('#edit_expense_total_display').val(formatCurrency(total));
            }

            $('#edit_expense_quantity, #edit_expense_amount').on('input', recalculateTotal);

            $('.btn-edit-expense').click(function() {
                var id = $(this).data('id');
                var date = $(this).data('date');
                var walletId = $(this).data('wallet-id');
                var category = $(this).data('category');
                var description = $(this).data('description');
                var quantity = $(this).data('quantity');
                var amount = $(this).data('amount');
                var image = $(this).data('image');

                $('#edit_expense_date').val(date);
                $('#edit_expense_wallet_id').val(walletId);
                $('#edit_expense_category').val(category);
                $('#edit_expense_description').val(description);
                $('#edit_expense_quantity').val(quantity);
                $('#edit_expense_amount').val(amount);
                
                recalculateTotal();

                // Handle current image preview
                if (image) {
                    $('#edit_expense_current_image_container').show();
                    $('#edit_expense_current_image_link').attr('href', image);
                } else {
                    $('#edit_expense_current_image_container').hide();
                }

                // Reset file input label
                $('#edit_expense_image_label').text('Pilih berkas');
                $('#edit_expense_image').val('');

                // Set form action dynamically
                var actionUrl = "{{ url('/expenses') }}/" + id;
                $('#editExpenseForm').attr('action', actionUrl);
            });

            // Update file input label on file selection
            $('#edit_expense_image').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').html(fileName || 'Pilih berkas');
            });

            function recalculateCreateTotal() {
                var qty = parseInt($('#create_expense_quantity').val()) || 0;
                var amt = parseFloat($('#create_expense_amount').val()) || 0;
                var total = qty * amt;
                $('#create_expense_total_display').val(formatCurrency(total));
            }

            $('#create_expense_quantity, #create_expense_amount').on('input', recalculateCreateTotal);

            $('#create_expense_image').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').html(fileName || 'Pilih berkas');
            });

            @if(request()->query('create'))
                $('#createExpenseModal').modal('show');
            @endif

            $('.btn-preview-receipt').click(function() {
                var imageUrl = $(this).data('image');
                $('#receiptPreviewImage').attr('src', imageUrl);
                $('#receiptDownloadLink').attr('href', imageUrl);
            });
        });
    </script>
@endsection
