@extends('layouts.dashboard2.app')
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
                <div class="col-lg-12 col-md12 col-sm-12 col-xs-12">
                    <div class="mem_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="member-container" style="overflow-x: scroll">
                                    <div class="member-right">
                                        <div class="col-lg-12">
                                            <div class="row overflow-x-scroll">
                                                    
                                                    <table cellspacing="0" cellpadding="2" border="0" class="tab table table-responsive" style="overflow-x: scroll">
                                                        <tbody>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Type</th>
                                                                <th>Currency</th>
                                                                <th>Amount</th>
                                                                <th>Wallet</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                                <th>Date</th>
                                                            </tr>
                                                            @forelse($transactions as $key => $transaction)
                                                                <tr>
                                                                    <td>{{ $key + 1 }}</td>
                                                                    <td>{{ ($transaction->nature) ? 'Deposit' : 'Withdrawal' }}</td>
                                                                    <td>{{ $transaction->currency->name . '(' . $transaction->currency->symbol . ')' }}</td>
                                                                    <td>${{ $transaction->amount }}</td>
                                                                    <td>{{ ($transaction->nature) ? $transaction->company_address : $transaction->client_address }}</td>
                                                                    <td>
                                                                        @if($transaction->nature)
                                                                            @if($transaction->status)
                                                                                <i class="fa fa-check text-primary me-1"></i> Completed
                                                                            @else
                                                                                <a href="{{ Auth::user()->admin ? route('admin.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) }}" class="text-info text-underline blink_me"><i class="fa fa-reload text-info blink_me me-1"></i> Pending</a>
                                                                            @endif
                                                                        @else
                                                                            {!! ($transaction->status) ? '<i class="fa fa-check text-primary me-1"></i> Completed' : '<a href="#" class="text-info text-underline blink_me"><i class="fa fa-reload text-info blink_me me-1"></i> Pending</a>' !!}
                                                                        @endif
                                                                    </td>                    </td>                    
                                                                    <td>
                                                                        @if($transaction->nature)
                                                                            <a href="{{ Auth::user()->admin ? route('admin.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) }}" class="text-info text-underline btn-outline-info"><i class="mdi mdi-eye text-info me-1"></i> View</a>
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ date('j D M, Y', strtotime($transaction->created_at)) }}</td>
                                                                </tr>
                                                            @empty
                                                                <div class="col-md-12 mx-auto text-center my-4 col-12 mb-2">
                                                                    No Transactions Found<br />
                                                                    <a class="btn btn-info mx-auto" href="{{ route('user.profile') }}#accounts">Add Wallet</a>
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
@endsection