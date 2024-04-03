@extends('layouts.mail.app')

@section('content')
    <span>{{$request->subject}}</span>
    <br>
    <div>
        <h4>Hi {{$client->username}},</h4>
    </div>
        {!! $request->message !!}
    <br>
    <p>Note: Should you have any inquiries, please feel free to respond to this email. I'm here to assist and am always pleased to help!</p><br>
    <a href="{{ route('login') }}" style="background: rgb(5, 5, 114); padding-right: 20px; padding-left: 20px; padding-top: 5px; padding-bottom: 5px; border-radius: 4px; color: #fff; text-decoration: none;">Dashboard</a>
@endsection