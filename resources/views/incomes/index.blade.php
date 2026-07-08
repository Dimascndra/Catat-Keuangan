@php
    $wallets = \App\Models\Wallet::all();
    $categories = \App\Models\Category::where('type', 'income')->get();
    $sources = \App\Models\Income::pluck('source')->unique()->filter()->values();
    
    $monthsId = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni',
        7 => 'Juli', 8 => 'Agustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];
    $formattedDate = ($monthsId[(int)$currentMonth] ?? date('F', mktime(0,0,0,$currentMonth,1))) . ' ' . $currentYear;
@endphp

@extends('layouts.index')
@section('title', 'Daftar Pemasukan')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Sumber Pemasukan
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mb-2 mb-sm-0" data-toggle="modal" data-target="#createIncomeModal">
                    Tambah Pemasukan
                </button>
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

        <div class="row mb-5">
            <div class="col-12">
                <div class="card card-custom bg-light-success gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                    Total Pemasukan ({{ $formattedDate }})
                                </a>
                                <p class="text-dark-50">
                                    Total dana yang terkumpul dari semua sumber.
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
                    <h3 class="card-label">Riwayat Pemasukan ({{ $formattedDate }})</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Tanggal</th>
                                <th>Sumber</th>
                                <th>Keterangan</th>
                                <th>Nominal</th>
                                <th>Terakhir Diperbarui</th>
                                <th class="text-right">Aksi</th>
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
                                    <td>{{ $income->updated_at ? $income->updated_at->format('d M Y H:i') : '-' }}</td>
                                    <td class="text-right pr-0">
                                        <button type="button"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3 btn-edit-income"
                                            data-toggle="modal"
                                            data-target="#editIncomeModal"
                                            data-id="{{ $income->id }}"
                                            data-date="{{ $income->date->format('Y-m-d') }}"
                                            data-wallet-id="{{ $income->wallet_id }}"
                                            data-source="{{ $income->source }}"
                                            data-description="{{ $income->description }}"
                                            data-amount="{{ (float)$income->amount }}"
                                            title="Ubah">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <i class="flaticon-edit"></i>
                                            </span>
                                        </button>
                                        <form action="{{ route('incomes.destroy', $income) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-light btn-hover-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pemasukan ini?');">
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
                                    <td colspan="6" class="text-center text-muted py-5">Tidak ada data pemasukan.</td>
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

    <!-- Modal Edit Pemasukan -->
    <div class="modal fade" id="editIncomeModal" tabindex="-1" role="dialog" aria-labelledby="editIncomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editIncomeModalLabel">Ubah Pemasukan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editIncomeForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Tanggal <span class="text-danger">*</span></label>
                                <input type="date" id="edit_income_date" name="date" class="form-control form-control-solid" required />
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <label>Wallet <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" id="edit_income_wallet_id" name="wallet_id" required>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label>Sumber <span class="text-danger">*</span></label>
                                <input list="edit-income-sources" class="form-control form-control-solid" id="edit_income_source" name="source" placeholder="Pilih atau ketik sumber" required />
                                <datalist id="edit-income-sources">
                                    @foreach ($sources as $source)
                                        <option value="{{ $source }}">
                                    @endforeach
                                </datalist>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" id="edit_income_description" name="description" class="form-control form-control-solid" placeholder="Keterangan tambahan (opsional)" />
                        </div>
                        <div class="form-group">
                            <label>Nominal (Rp) <span class="text-danger">*</span></label>
                            <input type="number" id="edit_income_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                            <span class="form-text text-muted" id="edit_income_amount_display"></span>
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

    <!-- Modal Tambah Pemasukan -->
    <div class="modal fade" id="createIncomeModal" tabindex="-1" role="dialog" aria-labelledby="createIncomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createIncomeModalLabel">Tambah Pemasukan Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('incomes.store') }}" method="POST">
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
                            <input type="text" name="description" class="form-control form-control-solid" placeholder="Keterangan tambahan" required />
                        </div>
                        <div class="form-group">
                            <label>Nominal (Rp) <span class="text-danger">*</span></label>
                            <input type="number" id="create_income_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                            <span class="form-text text-muted" id="create_income_amount_display"></span>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function formatCurrency(val) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(val);
            }

            $('.btn-edit-income').click(function() {
                var id = $(this).data('id');
                var date = $(this).data('date');
                var walletId = $(this).data('wallet-id');
                var source = $(this).data('source');
                var description = $(this).data('description');
                var amount = $(this).data('amount');

                $('#edit_income_date').val(date);
                $('#edit_income_wallet_id').val(walletId);
                $('#edit_income_source').val(source);
                $('#edit_income_description').val(description);
                $('#edit_income_amount').val(amount);
                $('#edit_income_amount_display').text(formatCurrency(amount));
                
                // Set form action dynamically
                var actionUrl = "{{ url('/incomes') }}/" + id;
                $('#editIncomeForm').attr('action', actionUrl);
            });

            $('#edit_income_amount').on('input', function() {
                var val = parseFloat($(this).val()) || 0;
                $('#edit_income_amount_display').text(formatCurrency(val));
            });

            $('#create_income_amount').on('input', function() {
                var val = parseFloat($(this).val()) || 0;
                $('#create_income_amount_display').text(formatCurrency(val));
            });

            @if(request()->query('create'))
                $('#createIncomeModal').modal('show');
            @endif
        });
    </script>
@endsection
