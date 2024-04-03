@extends('layouts.dashboard.user3.app', ['title' => 'Your Referrals'])

@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Referral Link</h5>
                <p class="card-text p-1 text-dark inline-block ref-user">
                    {{ route('register.ref', ['username' => Auth::user()->username]) }}
                </p>
                <div class="btn i-block btn-success" data-clipboard-text="{{ route('register.ref', ['username' => Auth::user()->username]) }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i data-feather="copy"></i>&nbsp;Copy Link</div>
            </div>
        </div>
    </div>
    <div class="col-12 p-0">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">All Your Referrals</h4>
                <x-Dashboard.Referrals :tableData="$referrals" />
            </div>
        </div>
    </div>
    <!-- end col -->
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