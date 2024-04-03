@extends('layouts.app', ['title' => '500 Internal Server Error'])

@section('content')
<div class="error-area">
    <div class="error-content text-center">
      <div class="error-num">
        500
        <div class="error-num__clip">500</div>
      </div>
      <h2>Internal Server Error</h2>
      <a href="{{ route('home') }}" class="cmn-btn mt-4">Go back to Home</a>
    </div>
  </div>
@endsection