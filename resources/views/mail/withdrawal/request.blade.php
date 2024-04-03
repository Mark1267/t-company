@extends('layouts.mail.app')

@section('content')
     <div class="col-12" style="width: 100% !important; font-size: 30px;">
          <h4 style="text-align: center; text-transform: capitalize; margin: 0; color: #00001c;">Withdrawal Request Processing Notification.</h4>
     </div>
     <div class="col-12" style="padding: 10px; word-wrap: break-word; color: #00001c;">
          <h5>Hi {{ $transaction->user->full_name }}, </h5>
        <span style="line-height: 23px;">
            You have requested for a withdrawal of <code style="background-color: #f0f0f0; color:#00001c; border-radius: 4px; padding: 7px;">${{ $transaction->amount }}</code> to <code style="background-color: #fefefe; color:#00001c; border-radius: 4px; padding: 5px;">{{ $transaction->client_address }}</code></p>
        </span>
        <p>Thank you for selecting our services. You will receive a notification via email once your withdrawal request has been authorized.</p>

          <a href="{{ route('login') }}" class="btn" style="margin: 15px auto; display: inline-block; text-align: center; padding: 16px; border-radius: 4px; color: #000000; background-color: #cca354; text-decoration: none;">Dashboard</a>

          <center style="margin-top: 20px;"><span style="margin-top: 30px; text-transform: uppercase; text-decoration: underline;">Invoice Details</span></center>

          <table cellspacing="3" style="width: 100%; text-align: left; border: 2px dashed #000000; color: #cca354; background-color: #00001c;">
               <tr style="padding: 10px; background-color:  #00001c;">
                    <th style="padding: 10px; background-color: #00001c; width: 40%;">Client Name</th>
                    <td style="padding: 10px;">{{ $transaction->user->full_name }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #ffff; width: 40%;">Transaction Type</th>
               <td style="padding: 10px;">Withdrawal Request</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #00001c; width: 40%;">Transaction Amount</th>
               <td style="padding: 10px;">${{ $transaction->amount }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #ffff; width: 40%;">Transaction Amount ({{ $transaction->currency->name }})</th>
               <td style="padding: 10px;">{{ $transaction->currency->coin_amount }} {{ $transaction->currency->symbol }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #00001c; width: 40%;">Transaction Currency</th>
               <td style="padding: 10px;">{{ $transaction->currency->name }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #ffff; width: 40%;">Wallet ID</th>
               <td style="padding: 10px;">{{ $transaction->client_address }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #00001c; width: 40%;">Transaction Narration</th>
               <td style="padding: 10px;">Decentralized Transaction System</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color:  #ffff; width: 40%;">Transaction Remarks</th>
               <td style="padding: 10px;">Pending</td>
               </tr>
               <tr style="padding: 10px; background-color:  #00001c;">
               <th style="padding: 10px; background-color: #00001c; width: 40%;">Date and Time</th>
               <td style="padding: 10px;">{{ date('F j, Y') }}</td>
               </tr>
          </table>
     </div>
@endsection