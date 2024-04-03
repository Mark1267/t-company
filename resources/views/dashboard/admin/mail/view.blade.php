@extends('layouts.mail.app')

@section('content')
    <h1>{{ $template->subject }}</h1>
    {!! $template->message !!}
@endsection