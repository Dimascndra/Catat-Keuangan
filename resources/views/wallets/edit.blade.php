@extends('layouts.index')
@section('title', 'Ubah Buku Kas')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Ubah Buku Kas
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
                    <h3 class="card-label">Ubah Buku Kas: {{ $wallet->name }}</h3>
                </div>
            </div>
            <form action="{{ route('wallets.update', $wallet) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Nama Buku Kas <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name', $wallet->name) }}" required />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label>Tipe / Kategori</label>
                            <select class="form-control form-control-solid select2 @error('type') is-invalid @enderror"
                                id="kt_select2_type" name="type">
                                <option value="Tunai" {{ old('type', $wallet->type) == 'Tunai' ? 'selected' : '' }}>Tunai</option>
                                <option value="Bank" {{ old('type', $wallet->type) == 'Bank' ? 'selected' : '' }}>Rekening Bank</option>
                                <option value="E-Wallet" {{ old('type', $wallet->type) == 'E-Wallet' ? 'selected' : '' }}>Dompet Digital (Gopay/Ovo/dll)</option>
                                <option value="Credit Card" {{ old('type', $wallet->type) == 'Credit Card' ? 'selected' : '' }}>Kartu Kredit</option>
                                <option value="Investment" {{ old('type', $wallet->type) == 'Investment' ? 'selected' : '' }}>Investasi</option>
                                <option value="Other" {{ old('type', $wallet->type) == 'Other' ? 'selected' : '' }}>Lainnya</option>
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
                            name="initial_balance" id="initial_balance"
                            value="{{ old('initial_balance', $wallet->initial_balance) }}" step="0.01" min="0"
                            required />
                        <span class="form-text text-muted">Ubah saldo awal HANYA jika terjadi kesalahan pengisian. Saldo Saat Ini akan disesuaikan secara otomatis.</span>
                        @error('initial_balance')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Saldo Saat Ini (Read-Only)</label>
                        <input type="text" class="form-control form-control-solid"
                            value="{{ $wallet->formatted_balance }}" disabled />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Simpan Perubahan</button>
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
