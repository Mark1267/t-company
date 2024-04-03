@extends('layouts.app', ['title' => '503 Service Unavailable Error'])

@section('content')
<div class="error-area">
    <div class="error-content text-center">
      <div class="error-num">
        503
        <div class="error-num__clip">503</div>
      </div>
      <h2>Service Unavailable Error</h2>
      <a href="{{ route('home') }}" class="cmn-btn mt-4">Go back to Home</a>
    </div>
  </div>
@endsection