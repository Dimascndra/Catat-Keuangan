@extends('layouts.index')
@section('title', 'Utang & Piutang')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Utang & Piutang
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mb-2 mb-sm-0" data-toggle="modal" data-target="#createDebtModal">
                    Tambah Data Baru
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

        <div class="card card-custom gutter-b">
            <div class="card-header card-header-tabs-line">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab_payable">
                                <span class="nav-icon"><i class="flaticon2-chart-2"></i></span>
                                <span class="nav-text">Hutang Saya</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_receivable">
                                <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                <span class="nav-text">Piutang Saya</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Tab: Payable -->
                    <div class="tab-pane fade show active" id="tab_payable" role="tabpanel">
                        @include('debts.partials._table', ['items' => $payable, 'type' => 'payable'])
                    </div>
                    <!-- Tab: Receivable -->
                    <div class="tab-pane fade" id="tab_receivable" role="tabpanel">
                        @include('debts.partials._table', ['items' => $receivable, 'type' => 'receivable'])
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Record Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form id="paymentForm" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nominal (Rp) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="amount" id="modalAmount" required
                                step="0.01" min="0">
                        </div>
                        <div class="form-group">
                            <label>Tanggal <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="date" value="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Wallet <span class="text-danger">*</span></label>
                            <select class="form-control" name="wallet_id" required>
                                @foreach ($wallets as $wallet)
                                    <option value="{{ $wallet->id }}">{{ $wallet->name }}
                                        ({{ $wallet->formatted_balance }})
                                    </option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted" id="walletHelpBase">Funds will be deducted from/added to
                                this wallet.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Simpan changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Utang/Piutang -->
    <div class="modal fade" id="editDebtModal" tabindex="-1" role="dialog" aria-labelledby="editDebtModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editDebtModalLabel">Ubah Record: <span id="modal-debt-name-title"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editDebtForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Tipe</label>
                                <select class="form-control form-control-solid" id="edit_debt_type" disabled>
                                    <option value="payable">Hutang (Saya berhutang kepada orang lain)</option>
                                    <option value="receivable">Piutang (Orang lain berhutang kepada saya)</option>
                                </select>
                                <span class="form-text text-muted">Tipe tidak dapat diubah.</span>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Nama Orang / Lembaga <span class="text-danger">*</span></label>
                                <input type="text" id="edit_debt_name" name="name" class="form-control form-control-solid" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Nominal (Rp)</label>
                                <input type="text" id="edit_debt_amount_display" class="form-control form-control-solid" disabled />
                                <span class="form-text text-muted">Nominal tidak dapat diubah langsung untuk menjaga integritas riwayat pembayaran.</span>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Jatuh Tempo</label>
                                <input type="date" id="edit_debt_due_date" name="due_date" class="form-control form-control-solid" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea id="edit_debt_description" name="description" class="form-control form-control-solid" rows="3"></textarea>
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

    <!-- Modal Tambah Utang & Piutang -->
    <div class="modal fade" id="createDebtModal" tabindex="-1" role="dialog" aria-labelledby="createDebtModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createDebtModalLabel">Tambah Utang / Piutang Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('debts.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Tipe <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" id="create_debt_type" name="type" required>
                                    <option value="payable">Utang (Saya meminjam uang)</option>
                                    <option value="receivable">Piutang (Orang meminjam uang saya)</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Buku Kas (Opsional)</label>
                                <select class="form-control form-control-solid" name="wallet_id">
                                    <option value="">Pilih Buku Kas (Tidak ada)</option>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->name }} ({{ number_format($wallet->balance, 0, ',', '.') }})</option>
                                    @endforeach
                                </select>
                                <span class="form-text text-muted" id="create_walletHelpBase">Pilih buku kas jika ingin saldo langsung disesuaikan.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Nama (Orang/Instansi) <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control form-control-solid" placeholder="Contoh: Budi, Bank Mandiri" required />
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Jatuh Tempo</label>
                                <input type="date" name="due_date" class="form-control form-control-solid" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                                <label>Nominal (Rp) <span class="text-danger">*</span></label>
                                <input type="number" id="create_debt_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                                <span class="form-text text-muted" id="create_debt_amount_display"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control form-control-solid" name="description" rows="3" placeholder="Keterangan tambahan"></textarea>
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
        $('#paymentModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var amount = button.data('amount')
            var type = button.data('type')

            var modal = $(this)
            modal.find('#modalAmount').val(amount)

            // Set Form Action
            var actionUrl = "{{ route('debts.pay', ':id') }}";
            actionUrl = actionUrl.replace(':id', id);
            modal.find('#paymentForm').attr('action', actionUrl);

            // Update help text
            var helpText = (type == 'payable') ?
                "Funds will be deducted from the selected wallet." :
                "Funds will be added to the selected wallet.";
            modal.find('#walletHelpBase').text(helpText);
        })

        $(document).ready(function() {
            function formatCurrency(val) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(val);
            }

            $('.btn-edit-debt').click(function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var dueDate = $(this).data('due-date');
                var description = $(this).data('description');
                var amount = $(this).data('amount');
                var type = $(this).data('type');

                $('#modal-debt-name-title').text(name);
                $('#edit_debt_name').val(name);
                $('#edit_debt_type').val(type);
                $('#edit_debt_amount_display').val(formatCurrency(amount));
                $('#edit_debt_due_date').val(dueDate);
                $('#edit_debt_description').val(description);
                
                // Set form action dynamically
                var actionUrl = "{{ url('/debts') }}/" + id;
                $('#editDebtForm').attr('action', actionUrl);
            });

            $('#create_debt_amount').on('input', function() {
                var val = parseFloat($(this).val()) || 0;
                $('#create_debt_amount_display').text(formatCurrency(val));
            });

            $('#create_debt_type').change(function() {
                var type = $(this).val();
                var helpText = (type == 'payable') ?
                    "Uang akan ditambahkan ke buku kas yang dipilih." :
                    "Uang akan dikurangi dari buku kas yang dipilih.";
                $('#create_walletHelpBase').text(helpText);
            });

            // Trigger change to set initial help text
            $('#create_debt_type').trigger('change');

            @if(request()->query('create'))
                $('#createDebtModal').modal('show');
            @endif
        });
    </script>
@endsection
