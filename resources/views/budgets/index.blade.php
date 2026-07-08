@extends('layouts.index')
@section('title', 'Manajemen Anggaran')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Manajemen Anggaran
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mb-2 mb-sm-0" data-toggle="modal" data-target="#createBudgetModal">
                    Atur Anggaran Baru
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

        <div class="row">
            @foreach ($budgets as $budget)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5">
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title font-weight-bolder text-dark">{{ $budget->category }}</h3>
                            <div class="card-toolbar">
                                <button type="button"
                                    class="btn btn-icon btn-light-primary btn-sm mr-2 btn-edit-budget"
                                    data-toggle="modal"
                                    data-target="#editBudgetModal"
                                    data-id="{{ $budget->id }}"
                                    data-category="{{ $budget->category }}"
                                    data-amount="{{ (float)$budget->amount }}"
                                    title="Ubah">
                                    <i class="flaticon2-pen"></i>
                                </button>
                                <form action="{{ route('budgets.destroy', $budget) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggaran ini?');">
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
                                    Terpakai</span>
                                <div class="mt-3">
                                    <span class="text-muted font-size-xs">Terakhir diperbarui: {{ $budget->updated_at ? $budget->updated_at->format('d M Y H:i') : '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($budgets->isEmpty())
                <div class="col-12">
                    <div class="alert alert-custom alert-light-warning fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">Belum ada anggaran yang diatur. Klik "Atur Anggaran Baru" untuk memulai.</div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Modal Edit Anggaran -->
    <div class="modal fade" id="editBudgetModal" tabindex="-1" role="dialog" aria-labelledby="editBudgetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBudgetModalLabel">Ubah Anggaran: <span id="modal-budget-category-title"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editBudgetForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Kategori</label>
                                <input type="text" id="edit_budget_category" class="form-control form-control-solid" disabled />
                                <span class="form-text text-muted">Kategori tidak dapat diubah. Silakan hapus dan buat baru jika diperlukan.</span>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Batas Bulanan (Rp) <span class="text-danger">*</span></label>
                                <input type="number" id="edit_budget_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                                <span class="form-text text-muted" id="edit_budget_amount_display"></span>
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

    <!-- Modal Tambah Anggaran -->
    <div class="modal fade" id="createBudgetModal" tabindex="-1" role="dialog" aria-labelledby="createBudgetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createBudgetModalLabel">Atur Anggaran Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('budgets.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Kategori <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" name="category" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="form-text text-muted">Hanya dapat mengatur satu anggaran per kategori.</span>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Batas Bulanan (Rp) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-solid" name="amount" id="create_budget_amount" placeholder="0" step="0.01" min="0" required />
                                <span class="form-text text-muted" id="create_budget_amount_display"></span>
                            </div>
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

            $('.btn-edit-budget').click(function() {
                var id = $(this).data('id');
                var category = $(this).data('category');
                var amount = $(this).data('amount');

                $('#modal-budget-category-title').text(category);
                $('#edit_budget_category').val(category);
                $('#edit_budget_amount').val(amount);
                $('#edit_budget_amount_display').text(formatCurrency(amount));
                
                // Set form action dynamically
                var actionUrl = "{{ url('/budgets') }}/" + id;
                $('#editBudgetForm').attr('action', actionUrl);
            });

            $('#edit_budget_amount').on('input', function() {
                var val = parseFloat($(this).val()) || 0;
                $('#edit_budget_amount_display').text(formatCurrency(val));
            });

            $('#create_budget_amount').on('input', function() {
                var val = parseFloat($(this).val()) || 0;
                $('#create_budget_amount_display').text(formatCurrency(val));
            });

            @if(request()->query('create'))
                $('#createBudgetModal').modal('show');
            @endif
        });
    </script>
@endsection
