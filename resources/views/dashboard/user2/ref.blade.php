@extends('layouts.dashboard2.app', ['title' => 'Your Referrals'])


@section('content')
    <div class="insidebanner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                </div>
            </div>
        </div>
    </div>
    <div class="member_wrap">
        <div class="member_inside">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mem_wrapper overflow-x-scroll">
                            <div class="row">
                                <div class="col-xl-12 mx-auto">
                                    <div class="card text-center" style="color: white; background-color: #28395e;">
                                        <div class="card-body">
                                            <h5 class="card-title">Referral Link</h5>
                                            <p class="card-text p-1 text-dark inline-block ref-user">
                                                {{ route('register.ref', ['username' => Auth::user()->username]) }}
                                            </p>
                                            {{-- <div class="btn i-block btn-success" data-clipboard-text="{{ route('register.ref', ['username' => Auth::user()->username]) }}" data-filter="copy" data-toggle="tooltip" data-orignal-title="copy"><i data-feather="copy"></i>&nbsp;Copy Link</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-3">
                                    <div class="card">
                                        <div class="card-body" style="color: white; background-color: #28395e;">
                            
                                            <h4 class="card-title">All Your Referrals</h4>
                                            <x-Dashboard.Referrals :tableData="$referrals" />
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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