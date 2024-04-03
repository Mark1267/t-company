@extends('layouts.mail.app')

@section('content')
     <div class="col-12" style="width: 100% !important; font-size: 30px;">
          <h4 style="text-align: center; text-transform: capitalize; margin: 0; color: white;">Withdrawal Processed.</h4>
     </div>
     <div class="col-12" style="padding: 10px; word-wrap: break-word; color: white;">
          <h5>Hi {{ $transaction->user->full_name }}, </h5>
          <span style="line-height: 20px;">
               You withdrawal of <code style="background-color: #cca354; color:#000000; border-radius: 4px; padding: 5px;">${{ $transaction->amount }}</code> to <code style="background-color: #cca354; color:#000000; border-radius: 4px; padding: 5px;">{{ $transaction->client_address }}</code> was successful.</p>
          </span>
          <p>Thank you for choosing us.</p>
          <p>If you have any inquiries, please don't hesitate to respond to this email. I'm here and eager to assist you!</p>

          <center style="margin-top: 20px;"><span style="margin-top: 20px; text-transform: uppercase; text-decoration: underline;">Withdrawal Successful</span></center>

          <table cellspacing="3" style="width: 100%; text-align: left; border: 2px dashed #000000; color: #cca354; background-color: white;">
               <tr style="padding: 10px; background-color:  #000000;">
                    <th style="padding: 10px; background-color: #000000; width: 40%;">Client Name</th>
                    <td style="padding: 10px;">{{ $transaction->user->full_name }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #fbd896; width: 40%;">Transaction Type</th>
               <td style="padding: 10px;">Withdrawal Request</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #000000; width: 40%;">Transaction Amount</th>
               <td style="padding: 10px;">${{ $transaction->amount }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #fbd896; width: 40%;">Transaction Amount ({{ $transaction->currency->name }})</th>
               <td style="padding: 10px;">{{ $transaction->currency->coin_amount }} {{ $transaction->currency->symbol }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #000000; width: 40%;">Transaction Currency</th>
               <td style="padding: 10px;">{{ $transaction->currency->name }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #fbd896; width: 40%;">Wallet ID</th>
               <td style="padding: 10px;">{{ $transaction->client_address }}</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #000000; width: 40%;">Transaction Narration</th>
               <td style="padding: 10px;">Decentralized Transaction System</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color:  #fbd896; width: 40%;">Transaction Remarks</th>
               <td style="padding: 10px;">Successful</td>
               </tr>
               <tr style="padding: 10px; background-color:  #000000;">
               <th style="padding: 10px; background-color: #000000; width: 40%;">Date and Time</th>
               <td style="padding: 10px;">{{ date('F j, Y') }}</td>
               </tr>
          </table>
     </div>
@endsection