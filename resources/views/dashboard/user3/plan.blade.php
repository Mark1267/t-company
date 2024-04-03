@extends('layouts.dashboard.user3.app', ['title' => 'My Plans'])

@section('css')
{{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
@endsection

@section('content')
<div class="row">
    <x-Dashboard.Plans :cat_id="1" type="error" />   
</div> 
@endsection