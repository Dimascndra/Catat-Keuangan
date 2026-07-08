@extends('layouts.index')
@section('title', 'Buku Kas')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Buku Kas Saya
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mb-2 mb-sm-0" data-toggle="modal" data-target="#createWalletModal">
                    Tambah Buku Kas Baru
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

        @if (session('error'))
            <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">{{ session('error') }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif

        <div class="row mb-5">
            <div class="col-12">
                <div class="card card-custom bg-light-info gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
                            <div class="d-flex flex-column mr-5">
                                <a href="#" class="h4 text-dark text-hover-primary mb-5">
                                    Total Saldo
                                </a>
                                <p class="text-dark-50">
                                    Total saldo gabungan dari seluruh buku kas.
                                </p>
                            </div>
                            <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                                <span class="btn btn-info btn-lg font-weight-bold py-2 px-6">
                                    Rp {{ number_format($totalBalance, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($wallets as $wallet)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-custom gutter-b card-stretch">
                        <div class="card-body pt-4">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <span class="text-dark-75 font-weight-bolder mr-2">{{ $wallet->type ?? 'Buku Kas' }}</span>
                                    <button type="button"
                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon btn-edit-wallet" 
                                        title="Ubah"
                                        data-toggle="modal" 
                                        data-target="#editWalletModal"
                                        data-id="{{ $wallet->id }}"
                                        data-name="{{ $wallet->name }}"
                                        data-type="{{ $wallet->type }}"
                                        data-initial-balance="{{ (float)$wallet->initial_balance }}"
                                        data-balance="{{ $wallet->formatted_balance }}">
                                        <span class="svg-icon svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#"
                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-4">{{ $wallet->name }}</a>
                                <span
                                    class="font-weight-bolder font-size-h2 text-dark">{{ $wallet->formatted_balance }}</span>
                                <span class="text-muted font-size-xs mt-2">Terakhir diperbarui: {{ $wallet->updated_at ? $wallet->updated_at->format('d M Y H:i') : '-' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal Edit Buku Kas -->
    <div class="modal fade" id="editWalletModal" tabindex="-1" role="dialog" aria-labelledby="editWalletModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editWalletModalLabel">Ubah Buku Kas: <span id="modal-wallet-name-title"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editWalletForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Nama Buku Kas <span class="text-danger">*</span></label>
                                <input type="text" id="edit_name" name="name" class="form-control form-control-solid" required />
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Tipe / Kategori</label>
                                <select class="form-control form-control-solid" id="edit_type" name="type">
                                    <option value="Tunai">Tunai</option>
                                    <option value="Bank">Rekening Bank</option>
                                    <option value="E-Wallet">Dompet Digital (Gopay/Ovo/dll)</option>
                                    <option value="Credit Card">Kartu Kredit</option>
                                    <option value="Investment">Investasi</option>
                                    <option value="Other">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Saldo Awal (Rp) <span class="text-danger">*</span></label>
                            <input type="number" id="edit_initial_balance" name="initial_balance" class="form-control form-control-solid" step="0.01" min="0" required />
                            <span class="form-text text-muted">Ubah saldo awal HANYA jika terjadi kesalahan pengisian. Saldo Saat Ini akan disesuaikan secara otomatis.</span>
                        </div>
                        <div class="form-group">
                            <label>Saldo Saat Ini (Read-Only)</label>
                            <input type="text" id="edit_current_balance" class="form-control form-control-solid" disabled />
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

    <!-- Modal Tambah Buku Kas -->
    <div class="modal fade" id="createWalletModal" tabindex="-1" role="dialog" aria-labelledby="createWalletModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createWalletModalLabel">Tambah Buku Kas Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('wallets.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Nama Buku Kas <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid" name="name" placeholder="e.g. Bank BCA, Dompet Tunai" required />
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Tipe / Kategori</label>
                                <select class="form-control form-control-solid" name="type">
                                    <option value="Tunai">Tunai</option>
                                    <option value="Bank">Rekening Bank</option>
                                    <option value="E-Wallet">Dompet Digital (Gopay/Ovo/dll)</option>
                                    <option value="Credit Card">Kartu Kredit</option>
                                    <option value="Investment">Investasi</option>
                                    <option value="Other">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Saldo Awal (Rp) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-solid" name="initial_balance" placeholder="0" value="0" step="0.01" min="0" required />
                            <span class="form-text text-muted">Saldo awal untuk buku kas ini.</span>
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
            $('.btn-edit-wallet').click(function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var type = $(this).data('type');
                var initialBalance = $(this).data('initial-balance');
                var balance = $(this).data('balance');

                $('#modal-wallet-name-title').text(name);
                $('#edit_name').val(name);
                $('#edit_type').val(type);
                // Trigger select2 update if initialized
                if (typeof $('#edit_type').select2 === 'function') {
                    $('#edit_type').val(type).trigger('change');
                }
                $('#edit_initial_balance').val(initialBalance);
                $('#edit_current_balance').val(balance);
                
                // Set form action dynamically
                var actionUrl = "{{ url('/wallets') }}/" + id;
                $('#editWalletForm').attr('action', actionUrl);
            });

            @if(request()->query('create'))
                $('#createWalletModal').modal('show');
            @endif
        });
    </script>
@endsection
