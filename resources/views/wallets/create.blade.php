@extends('layouts.index')
@section('title', 'Tambah Buku Kas')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Tambah Buku Kas
        @endslot
        @slot('action')
            <a href="{{ route('wallets.index') }}" class="btn btn-secondary font-weight-bolder btn-sm">
                Kembali ke Daftar
            </a>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Informasi Buku Kas Baru</h3>
                </div>
            </div>
            <form action="{{ route('wallets.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Nama Buku Kas <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" placeholder="e.g. Bank BCA, Dompet Tunai" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>Tipe / Kategori</label>
                            <select class="form-control form-control-solid select2 @error('type') is-invalid @enderror"
                                id="kt_select2_type" name="type">
                                <option value="Tunai" {{ old('type') == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                                <option value="Bank" {{ old('type') == 'Bank' ? 'selected' : '' }}>Rekening Bank</option>
                                <option value="E-Wallet" {{ old('type') == 'E-Wallet' ? 'selected' : '' }}>Dompet Digital (Gopay/Ovo/dll)</option>
                                <option value="Credit Card" {{ old('type') == 'Credit Card' ? 'selected' : '' }}>Kartu Kredit</option>
                                <option value="Investment" {{ old('type') == 'Investment' ? 'selected' : '' }}>Investasi</option>
                                <option value="Other" {{ old('type') == 'Other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Saldo Awal (Rp) <span class="text-danger">*</span></label>
                        <input type="number"
                             class="form-control form-control-solid @error('initial_balance') is-invalid @enderror"
                             name="initial_balance" id="initial_balance" placeholder="0"
                             value="{{ old('initial_balance', 0) }}" step="0.01" min="0" required />
                        <span class="form-text text-muted">Saldo awal untuk buku kas ini.</span>
                        @error('initial_balance')
                             <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#kt_select2_type').select2({
                placeholder: "Pilih tipe buku kas",
                allowClear: false
            });
        });
    </script>
@endsection
