@extends('layouts.dashboard2.app', ['title' => 'New Deposit'])

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
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
                                                    <form method="post" action="{{ route('user.transaction.withdraw.new.save') }}">
                                                        @csrf
                                                        <table cellspacing="0" cellpadding="2" border="0" class="tab">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Account Balance:</td>
                                                                    <td>$<b>{{ Auth::user()->balance }}</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pending Withdrawals: </td>
                                                                    <td>$<b>{{ $data->summary->pending_withdrawals }}</b></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        
                                                        <table cellspacing="0" cellpadding="2" border="0" class="tab table table-responsive" style="overflow-x: scroll">
                                                            <tbody>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>Processing</th>
                                                                    <th>Available</th>
                                                                    <th>Pending</th>
                                                                    <th>Account</th>
                                                                </tr>
                                                                @forelse($data->currency as $datum)
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><img src="" width="44" height="17" align="absmiddle"> {{ $datum->account->name }}</td>
                                                                        <td><b style="color:green">${{ Auth::user()->balance }}</b></td>
                                                                        <td><b style="color:red">${{ $data->summary->pending_withdrawals }}</b></td>
                                                                        <td><a href="{{ route('user.profile') }}"><i>{{ $datum->address }}</i></a></td>
                                                                    </tr>
                                                                @empty
                                                                    <div class="col-md-12 mx-auto text-center my-4 col-12 mb-2">
                                                                        No Wallet Address Found<br />
                                                                        <a class="btn btn-info mx-auto" href="{{ route('user.profile') }}#accounts">Add Wallet</a>
                                                                    </div>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                        <br><br>
                                                        @if (Auth::user()->balance <= 0)
                                                            You have no funds to withdraw.
                                                        @else
                                                            Account Balance:
                                                            $<b>{{ Auth::user()->balance }}</b>
                                                            <div class="row">
                                                                    <div class="col-md-4 col-12">
                                                                        <div class="form-group border border-primary">
                                                                            <label for="amount">Amount to Withdraw</label>
                                                                            <input type="text" placeholder="AMount*" class="form-control" value="{{ old('amount') }}" name="amount">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Select Currency</label>
                                                                            <select class="form-select" name="currency_id" style="width: 100%">
                                                                                <option></option>
                                                                                @foreach ($data->currency as $currency)
                                                                                    <option {{ ($currency->id == old('currency_id')) ? 'selected' : '' }} value="{{ $currency->id }}">{{ $currency->account->name }} ({{ $currency->account->network }})</option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('currency_id')
                                                                                <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                                                        <button class="btn btn-primary mx-auto" type="submit">Request Withdrawal</button>
                                                                    </div>
                                                            </div>
                                                        @endif
                                                    </form>              
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