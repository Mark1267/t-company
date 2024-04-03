@extends('layouts.app', ['title' => '403 Unauthorized Access'])

@section('content')
<div class="error-area">
    <div class="error-content text-center">
      <div class="error-num">
        403
        <div class="error-num__clip">403</div>
      </div>
      <h2>Unauthorized Access to Page</h2>
      <a href="{{ route('home') }}" class="cmn-btn mt-4">Go back to Home</a>
    </div>
  </div>
@endsection