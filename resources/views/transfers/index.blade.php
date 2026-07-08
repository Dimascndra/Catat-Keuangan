@extends('layouts.index')
@section('title', 'Mutasi Kas')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Riwayat Mutasi Kas
        @endslot
        @slot('action')
            <div class="d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary font-weight-bolder btn-sm mb-2 mb-sm-0" data-toggle="modal" data-target="#createTransferModal">
                    Mutasi Kas Baru
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
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Mutasi Kas Terbaru</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th>Tanggal</th>
                                <th>Dari Buku Kas</th>
                                <th>Ke Buku Kas</th>
                                <th>Keterangan</th>
                                <th>Terakhir Diperbarui</th>
                                <th class="text-right">Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transfers as $transfer)
                                <tr>
                                    <td>{{ $transfer->date->format('d M Y') }}</td>
                                    <td>
                                        <span class="label label-lg label-light-danger label-inline font-weight-bold">
                                            {{ $transfer->fromWallet->name }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="label label-lg label-light-success label-inline font-weight-bold">
                                            {{ $transfer->toWallet->name }}
                                        </span>
                                    </td>
                                    <td>{{ $transfer->description ?? '-' }}</td>
                                    <td>{{ $transfer->updated_at ? $transfer->updated_at->format('d M Y H:i') : '-' }}</td>
                                    <td class="text-right font-weight-bolder text-dark">{{ $transfer->formatted_amount }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-5">Tidak ada data mutasi kas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $transfers->links() }}
            </div>
        </div>
    </div>

    <!-- Modal Tambah Mutasi Kas -->
    <div class="modal fade" id="createTransferModal" tabindex="-1" role="dialog" aria-labelledby="createTransferModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createTransferModalLabel">Mutasi Kas Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('transfers.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Dari Buku Kas <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" name="from_wallet_id" required>
                                    <option value="">Pilih Sumber Buku Kas</option>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->name }} ({{ $wallet->formatted_balance }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Ke Buku Kas <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid" name="to_wallet_id" required>
                                    <option value="">Pilih Target Buku Kas</option>
                                    @foreach ($wallets as $wallet)
                                        <option value="{{ $wallet->id }}">{{ $wallet->name }} ({{ $wallet->formatted_balance }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                                <label>Tanggal <span class="text-danger">*</span></label>
                                <input type="date" name="date" class="form-control form-control-solid" value="{{ date('Y-m-d') }}" required />
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Nominal (Rp) <span class="text-danger">*</span></label>
                                <input type="number" id="create_transfer_amount" name="amount" class="form-control form-control-solid" step="0.01" min="0" required />
                                <span class="form-text text-muted" id="create_transfer_amount_display"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control form-control-solid" name="description" placeholder="Keterangan mutasi kas" />
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

            $('#create_transfer_amount').on('input', function() {
                var val = parseFloat($(this).val()) || 0;
                $('#create_transfer_amount_display').text(formatCurrency(val));
            });

            @if(request()->query('create'))
                $('#createTransferModal').modal('show');
            @endif
        });
    </script>
@endsection
