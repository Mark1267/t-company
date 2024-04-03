@extends('layouts.mail.app')

@section('content')
     <div class="col-12" style="width: 100% !important; font-size: 30px;">
          <h4 style="text-align: center; text-transform: capitalize; margin: 0; color: #00001c; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">Deposit Request.</h4>
     </div>
     <div class="col-12" style="padding: 10px; word-wrap: break-word; color: #00001C;">
          <h5 style="color: #00001c; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">Hello {{ $transaction->user->full_name }}, </h5>
          <p style="line-height: 20px;">
               We've received your deposit request Transaction ID: <span style="font-family: monospace;">{{ $transaction->transaction_id }}</span>, We will notify you when we receive the payment.
          </p>

          <a href="{{ route('login') }}" class="btn" style="margin: 15px auto; display: inline-block; text-align: center; padding: 16px; border-radius: 4px; color: #00001C; background-color: #cca354; text-decoration: none;">Dashboard</a>

          <center style="margin-top: 20px;"><h2 style="margin-top: 30px; text-transform: uppercase; text-decoration: underline;">Deposit Details</h2></center>

          <table cellspacing="3" style="width: 100%; text-align: left; border: 2px dashed #00001C; color: white; background-color: rgb(245, 245, 245);">
               <tr style="padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #00001C; width: 40%;">Client Name</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">{{ $transaction->user->full_name }}</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #fff; width: 40%;">Transaction Type</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">Deposit Request</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #00001C; width: 40%;">Transaction Amount</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">${{ $transaction->amount }}</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #fff; width: 40%;">Transaction Amount ({{ $transaction->currency->name }})</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">{{ $transaction->currency->coin_amount }} {{ $transaction->currency->symbol }}</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #00001C; width: 40%;">Transaction Currency</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">{{ $transaction->currency->name }}</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #fff; width: 40%;">Wallet ID</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">{{ $transaction->company_address }}</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #00001C; width: 40%;">Transaction Narration</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">Decentralized Transaction System</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #fff; width: 40%;">Transaction Remarks</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">Pending</td>
               </tr>
               <tr style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color:  #00001C;">
                    <th style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px; background-color: #00001C; width: 40%;">Date and Time</th>
                    <td style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; padding: 10px;">{{ date('F j, Y H:i') }}</td>
               </tr>
          </table>
     </div>
@endsection