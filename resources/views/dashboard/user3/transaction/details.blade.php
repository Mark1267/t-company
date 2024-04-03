@extends('layouts.dashboard.user3.app', ['title' => 'Your Deposit Details'])

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4>Your Deposit Details for #{{ $transaction->transaction_id }}</h4>
            </div>
            <div class="card-body p-2">
                
                <form id="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label class="form-label" for="amount">Amount (Dollars)</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="btn i-block btn-primary" data-clipboard-text="{{ $transaction->amount }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i class="la la-copy"></i></div>
                                    </div>
                                    <input type="number" class="form-control" readonly value="{{ $transaction->amount }}" name="amount" id="amount">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label class="form-label" for="amount">Amount ( {{ $transaction->currency->name }})</label>
                                <div class="input-group align-content-center">
                                    <div class="input-group-text">
                                        <div class="btn i-block btn-primary" data-clipboard-text="{{ $transaction->currency->coin_amount }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i class="la la-copy"></i></div>
                                    </div>
                                    <input type="number" class="form-control" readonly value="{{ $transaction->currency->coin_amount }}" name="amount" id="amount">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="mb-1">
                            <label class="form-label" for="wallet">Currency</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="btn i-block btn-primary" data-clipboard-text="{{ $transaction->currency->name }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i class="la la-copy"></i></div>
                                    </div>
                            <input type="text" name="name" class="form-control" id="name" readonly value="{{ $transaction->currency->name }}">
                                </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label class="form-label" for="wallet">Your Mining Wallet ID</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="btn i-block btn-primary" data-clipboard-text="{{ $transaction->company_address }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i class="la la-copy"></i></div>
                                    </div>
                            <input type="text" name="companyAddress" class="form-control" id="companyAddress" readonly value="{{ $transaction->company_address }}">
                                </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label class="form-label" for="wallet">Your Mining Wallet Network</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="btn i-block btn-primary" data-clipboard-text="{{ $transaction->currency->network }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i class="la la-copy"></i></div>
                                    </div>
                            <input type="text" name="companyAddress" class="form-control" id="companyAddress" readonly value="{{ $transaction->currency->network }}">
                                </div>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('srcipts')
    <script src="{{ asset('assets/dashboard/js/clipboard.min.js') }}"></script>
    <script type="text/javascript">
            var iclp = new ClipboardJS('.i-block');
            iclp.on('success', function(e) {
                $(e.trigger).append("<span class='ic-badge badge badge-success'>copied</span>");
                setTimeout(function() {
                    $('.i-block').children('.ic-badge').remove();
                }, 3000);
            });

            iclp.on('error', function(e) {
                $(e.trigger).append("<span class='ic-badge badge badge-danger'>Error</span>");
                setTimeout(function() {
                    $('.i-block').children('.ic-badge').remove();
                }, 3000);
            });
    </script>
@endsection