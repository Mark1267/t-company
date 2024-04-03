@extends('layouts.dashboard2.app', ['title' => 'Your Deposit Details'])

@section('content')
<div class="container" style="background-color: #233254">
    <h3>Please confirm your deposit:</h3><br><br>

    <br><br>

    <table cellspacing=0 cellpadding=2 class="form deposit_confirm">
    <tr>
    <th>Plan:</th>
    <td>{{ $transaction->plan->name }} PLAN {{ $transaction->plan->rate }}% AFTER {{ $transaction->plan->time . ' ' . $transaction->plan->planTime->suffix }}</td>
    </tr>
    <tr>
    <th>Profit:</th>
    <td>{{ $transaction->plan->rate }}%  for {{ $transaction->plan->time . ' ' . $transaction->plan->planTime->suffix }} </td>
    </tr>
    <tr>
    <th>Principal Return:</th>
    <td>Yes</td>
    </tr>
    <tr>
    <th>Principal Withdraw:</th>
    <td>
    Available with 
    0.00% fee  </td>
    </tr>
    
    <tr>
    <th>Amount:</th>
    <td>${{ $transaction->amount }}</td>
    </tr>
    <tr>
    <th> Amount ( {{ $transaction->currency->name }}):</th>
    <td>{{ $transaction->currency->coin_amount }} {{ $transaction->currency->symbol }}</td>
    </tr>
    </table>
    <br><br>
    <form name=spend method=post>
        @csrf
        <input type=hidden name=a value=deposit>
        <input type=hidden name=action value=confirm>
        <input type=hidden name=type value="{{ $transaction->account_id }}">
        <input type=hidden name=h_id value="{{ $transaction->plan_id }}">
        <input type=hidden name=compound value=>
        <input type=hidden name=amount value="{{ $transaction->amount }}">
        <table cellspacing=0 cellpadding=2 border=0>
        <tr>
        <td colspan=2><b>Required Information:</b></td>
        </tr>
        <tr>
        <td>Copy Address & Deposit.</td>
        <td><input type="text" name="fields[1]" value="" class=inpts></td>
        </tr>
        <tr>
        <td>Bitcoin Wallet :  {{ $transaction->company_address }}</td>
        <td><input type="text" name="fields[2]" value="" class=inpts></td>
        </tr>
        </table>

        <br><input type=button value="Save" onclick="document.location='{{ route('user.transaction.deposit.new') }}'" class=sbmt> &nbsp;
        <input type=button class=sbmt value="Cancel" onclick="document.location='{{ route('user.transaction.deposit.new') }}'">
    </form>
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