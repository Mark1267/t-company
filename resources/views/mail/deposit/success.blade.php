@extends('layouts.mail.app')

@section('content')
     <div class="col-12" style="width: 100% !important; font-size: 30px;">
          <h4 style="text-align: center; text-transform: capitalize; margin: 0; color: #00001c;">Account Credit Notification: Successful Funding Transaction</h4>
     </div>
     <div class="col-12" style="padding: 10px; word-wrap: break-word; color: #00001c;">
          <h5 style="color: #00001c">Dear Valued Customer,</h5>
               {{-- {{ $transaction->user->full_name }}, </h5> --}}
          <p style="line-height: 20px;">
               We hope this message finds you well. We would like to inform you about a recent transaction on your mining account. Your account has been successfully credited with the following amount:
               {{-- Your deposit of ${{ $transaction->amount }} has been received --}}
               {{-- Your deposit has been confirmed automatically, Deposit Tranaction ID: <span style="font-family: monospace;">{{ $transaction->transaction_id }}</span>, Kindly login to your dashboard below to monitor the investment progress. --}}
               {{-- We've received your deposit of Transaction ID: <span style="font-family: monospace;">{{ $transaction->transaction_id }}</span>, and we have activated your investment. Please login to your dashboard below to monitor the progress. --}}
          </p>
          <br><br>
          <p style="line-height: 20px;">${{ $transaction->amount }}</p>
          <p style="line-height: 20px;">This credit is in recognition of the trading privileges associated with your account on our platform. Kindly log in to your account to verify and confirm this transaction.</p>

          <p style="line-height: 20px;">If you have any questions or require further assistance, please don't hesitate to contact us at support@oceanminingprime.com, providing your email or updated contact number. Alternatively, you can reach out to us directly through our contact us page or utilize the live chat feature on our website.</p>
          <p style="line-height: 20px;">Thank you for choosing Oceanminingprime.</p><br>
          <p style="line-height: 20px;">Best Regards,</p><br>
          <p style="line-height: 20px;">Oceanminingprime Team</p>
          <p style="line-height: 20px;">Forex | Trading | Cryptocurrencies | Binary</p>
          

          {{-- <a href="{{ route('login') }}" class="btn" style="margin: 15px auto; display: inline-block; text-align: center; padding: 16px; border-radius: 4px; color: #000000; background-color: #cca354; text-decoration: none;">Dashboard</a>

          <center style="margin-top: 20px;"><h4 style="margin-top: 10px; text-transform: uppercase; text-decoration: underline;">Deposit Details</h4></center>

          <p style=" color: #00001c;"><strong>Transaction ID: </strong> {{ $transaction->transaction_id }}</p>
            <p style=" color: #00001c;"><strong>Amount: </strong> ${{ $transaction->amount }}</p>
            <p style=" color: #00001c;"><strong>Currency: </strong> {{ $transaction->currency->name }}</p>
            <p style=" color: #00001c;"><strong>Wallet: </strong> {{ $transaction->company_address }}</p> --}}
     </div>
@endsection