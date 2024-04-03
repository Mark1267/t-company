@extends('layouts.app', ['title' => '404 Not Found'])

@section('content')
<div class="error-area">
    <div class="error-content text-center">
      <div class="error-num">
        404
        <div class="error-num__clip">404</div>
      </div>
      <h2>Page Not Found</h2>
      <a href="{{ route('home') }}" class="cmn-btn mt-4">Go back to Home</a>
    </div>
  </div>
@endsection