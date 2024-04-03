@extends('layouts.dashboard2.app', ['title' => 'My Dashboard'])

@section('content')
    
<div class="insidebanner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>My Dashboard</h2></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
        </div>
    </div>
</div>
<div class="member_wrap">
    <div class="big-stats">
        <div class="row">
            <div class="col-lg-12 col-md12 col-sm-12 col-xs-12">
                <div class="left">
                <h2>Your referal link</h2>
                <span><i class="fa fa-link fa-fw fa-3x"></i></span>
                <p><a href="{{ route('register.ref', ['username' => Auth::user()->username]) }}">{{ route('register.ref', ['username' => Auth::user()->username]) }}</a></p>
                </div>
                <div class="mid1">
                <h2>You are Referer from</h2>
                    <span><i class="fa fa-handshake-o fa-fw fa-3x"></i></span>
                    <p> @if ($ref_by == null)
                        We can't find any Referer 
                    @else
                        {{ $ref_by->username }}
                    @endif </p>
                </div>
                <div class="right">
                <h2>Share &amp; Earn</h2>
                <span><i class="fa fa-users fa-fw fa-3x"></i></span>
                <p>Get up - to 10% affiliate bonus for free!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="member_inside">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md12 col-sm-12 col-xs-12">
                    <div class="mem_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="member-container">
                                    <div class="member-right">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="circle-tile">
                                                        <a href="{{ route('user.overview') }}">
                                                            <div class="circle-tile-heading dark-blue">
                                                                <i class="fa fa-user fa-fw fa-3x"></i>
                                                            </div>
                                                        </a>
                                                        <div class="circle-tile-content dark-blue">
                                                            <div class="circle-tile-description text-faded">
                                                                Users
                                                            </div>
                                                            <div class="circle-tile-number text-faded">
                                                            {{ Auth::user()->username }}
                                                                <span id="sparklineA"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="circle-tile">
                                                        <a href="{{ route('user.overview') }}">
                                                            <div class="circle-tile-heading green">
                                                                <i class="fa fa-calendar fa-fw fa-3x"></i>
                                                            </div>
                                                        </a>
                                                        <div class="circle-tile-content green">
                                                            <div class="circle-tile-description text-faded">
                                                                Registered
                                                            </div>
                                                            <div class="circle-tile-number text-faded">
                                                                {{ date('F j, Y', strtotime(Auth::user()->created_at)) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="circle-tile">
                                                        <a href="{{ route('user.overview') }}">
                                                            <div class="circle-tile-heading orange">
                                                                <i class="fa fa-bell fa-fw fa-3x"></i>
                                                            </div>
                                                        </a>
                                                        <div class="circle-tile-content orange">
                                                            <div class="circle-tile-description text-faded">
                                                            Last Access
                                                            </div>
                                                            <div class="circle-tile-number text-faded">
                                                            {{ Carbon\Carbon::now() }}&nbsp;
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="circle-tile">
                                                        <a href="{{ route('user.overview') }}">
                                                            <div class="circle-tile-heading blue">
                                                                <i class="fa fa-map fa-fw fa-3x"></i>
                                                            </div>
                                                        </a>
                                                        <div class="circle-tile-content blue">
                                                            <div class="circle-tile-description text-faded">
                                                            Account Balance
                                                            </div>
                                                            <div class="circle-tile-number text-faded">
                                                            $<b>{{ Auth::user()->balance }}</b>
                                                                <span id="sparklineB"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="panel hvr-bounce-to-right">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <h3 class="big-header" style="color: #428bca;">$<b>{{ $summary->total_earnings }}</b></h3>
                                                                <p class="text-muted pb-10">Earned Total</p>
                                                            </div>
                                                            <div class="col-xs-4 text-right pad-10">
                                                                <em class="fa fa-cc-visa fa-3x text-blue"></em>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-striped progress-xs nm">
                                                            <div style="width: 100%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
                                                                <span class="sr-only">1000% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="panel hvr-bounce-to-right">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <h3 class="big-header" style="color: #16a085;">$<b>{{ $summary->pending_withdrawals }}</b></h3>
                                                                <p class="text-muted pb-10">Pending Withdrawal</p>
                                                            </div>
                                                            <div class="col-xs-4 text-right pad-10">
                                                                <i class="fa fa-bar-chart fa-3x text-red"></i>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-striped progress-xs nm">
                                                            <div style="width: 100%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger">
                                                                <span class="sr-only">100% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="panel widget hvr-bounce-to-right">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <h3 class="big-header" style="color: #f39c12;">$<b>{{ $summary->total_withdrawals }}</b></h3>
                                                                <p class="text-muted pb-10">Withdrew Total</p>
                                                            </div>
                                                            <div class="col-xs-4 text-right pad-10">
                                                                <em class="fa fa-bar-chart fa-3x text-green"></em>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-striped progress-xs nm">
                                                            <div style="width: 100%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success">
                                                                <span class="sr-only">100% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="panel widget hvr-bounce-to-right">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                            <h3 class="big-header" style="color: #d95043;">$<b>{{ $summary->active_investments }}</b></h3>
                                                                <p class="text-muted pb-10">Active Deposit</p>
                                                            </div>
                                                            <div class="col-xs-4 text-right pad-10">
                                                                <i class="fa fa-dollar fa-3x text-yellow"></i>
                                                            </div>
                                                        </div>
                                                        <div class="progress progress-striped progress-xs nm">
                                                            <div style="width: 100%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                                                                <span class="sr-only">100% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="panel panel-metric panel-metric-sm">
                                                        <div class="panel-body panel-body-primary">
                                                            <div class="metric-content metric-icon">
                                                                <div class="value">
                                                                $<b>{{ $summary->last_deposit ?? 'N/A' }}</b> &nbsp;
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="fa fa-trophy"></i>
                                                                </div>
                                                                <header>
                                                                <h3 class="thin" style="font-size: 18px;">Last Deposit</h3>
                                                                </header>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="panel panel-metric panel-metric-sm">
                                                        <div class="panel-body panel-body-success">
                                                            <div class="metric-content metric-icon">
                                                                <div class="value">
                                                                    $<b>{{ $summary->total_investments }}</b>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="fa fa-btc"></i>
                                                                </div>
                                                                <header>
                                                                <h3 class="thin" style="font-size: 18px;">Total Deposit</h3>
                                                                </header>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="panel panel-metric panel-metric-sm">
                                                        <div class="panel-body panel-body-inverse">
                                                            <div class="metric-content metric-icon">
                                                                <div class="value">
                                                                    $<b>{{ $summary->last_withdrawal ?? 'N/A' }}</b> &nbsp;
                                                                
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="fa fa-money"></i>
                                                                </div>
                                                                <header>
                                                                <h3 class="thin" style="font-size: 18px;">  Last Withdrawal</h3>
                                                                </header>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="panel panel-metric panel-metric-sm">
                                                        <div class="panel-body panel-body-danger">
                                                            <div class="metric-content metric-icon">
                                                                <div class="value">
                                                                $<b>{{ $summary->total_withdrawals }}</b>
                                                                </div>
                                                                <div class="icon">
                                                                    <i class="fa fa-tags"></i>
                                                                </div>
                                                                <header>
                                                            <h3 class="thin" style="font-size: 18px;">Withdrew Total</h3>
                                                                </header>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row overflow-x-scroll">
                                                <div class="col-md-12">
                                                    <div class="card" id="earnings">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Latest Transaction</h4>
                                                            <table cellspacing="0" cellpadding="2" border="0" class="tab table table-responsive" style="overflow-x: scroll">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" style="width: 60px;"></th>
                                                                        <th scope="col">ID & Name</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Amount</th>
                                                                        <th scope="col">Plan</th>
                                                                        <th scope="col">Earnings</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Time(Remaining)</th>
                                                                        <th scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse($investments as $data)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="avatar-xs">
                                                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                                                    {{  Str::substr($data->user->username, 0, 1) }}
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1 font-size-12">{{  $data->transaction_id }}</p>
                                                                            <h6 class="font-size-15 mb-0">{{ $data->user->username }}</h6>
                                                                        </td>
                                                                        <td>{{ date('j D M, Y', strtotime($data->date)) }}</td>
                                                                        <td>${{ $data->amount }}</td>
                                                                        {{-- <td>{{ $data->plan->type }}</td> --}}
                                                                        <td>{{ $data->plan->name }} : <span class="text-success">{{ $data->plan->rate }}%</span></td>
                
                                                                        <td>
                                                                            $ {{ $data->earning }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($data->status)
                                                                                <i class="fa fa-check text-primary me-1"></i> Completed
                                                                            @else
                                                                                <i class="fa fa-reload text-info blink_me me-1"></i> Running
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            {{ $data->time_remaining }}
                                                                        </td>
                                                                        <td>
                                                                            @if ($data->status)
                                                                                <a href="{{ route('user.transaction.withdraw.new') }}" class="btn btn-outline-success btn-sm"><i class="fa fa-bank-minus"></i> Withdraw</a>
                                                                                <a 
                                                                                    href="{{ route('reinvest', ['transaction_id' => $data->transaction_id]) }}" 
                                                                                    class="btn btn-outline-primary{{ ($data->user->balance < $data->amount) ? ' disabled' : '' }} btn-sm"
                                                                                >
                                                                                    <i class="fa fa-reload me-2"></i> 
                                                                                    Re Invest
                                                                                </a>
                                                                            @else
                                                                                <a href="#" class="btn blink_me btn-disabled btn-outline-success btn-sm">Running</a>
                                                                            @endif
                                                                            @if($data->user->admin)
                                                                                <a href="{{ route('admin.transaction.deposit.delete', ['transaction_id' => $data->transaction_id]) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @empty
                                                                        <div class="col-md-12 mx-auto text-center my-4 col-12 mb-2">
                                                                            No Transactions Found<br />
                                                                        </div>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection