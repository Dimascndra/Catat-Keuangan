@extends('layouts.index')
@section('title', 'Debts & Receivables')

@section('subheader')
    @component('layouts.partials._subheader.subheader-v1')
        @slot('title')
            Debts & Receivables
        @endslot
        @slot('action')
            <a href="{{ route('debts.create') }}" class="btn btn-primary font-weight-bolder btn-sm">
                Add New Record
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

        <div class="card card-custom gutter-b">
            <div class="card-header card-header-tabs-line">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab_payable">
                                <span class="nav-icon"><i class="flaticon2-chart-2"></i></span>
                                <span class="nav-text">My Debts (Hutang)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab_receivable">
                                <span class="nav-icon"><i class="flaticon2-layers-1"></i></span>
                                <span class="nav-text">Receivables (Piutang)</span>
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
                            <label>Amount (Rp) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="amount" id="modalAmount" required
                                step="0.01" min="0">
                        </div>
                        <div class="form-group">
                            <label>Date <span class="text-danger">*</span></label>
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
                        <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
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
    </script>
@endsection
