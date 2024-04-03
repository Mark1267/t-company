@extends('layouts.app', ['title' => 'Our Services'])

@section('css')
  <style>
  </style>
@endsection

@section('content')
<!-- page title -->
<section class="section section--first">
  <div class="container">
    <div class="row">
      <!-- section title -->
      <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <h1 class="section__title section__title--page">Services</h1>
        <p class="section__text">Experience the Evolution of Crypto Mining Services at {{ config('settings.site.name') }}, Where Innovation Meets Purpose</p>
      </div>
      <!-- end section title -->
    </div>
  </div>

  <!-- particles -->
  <div id="canvas" class="section__particles"><canvas class="vanta-canvas" style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 100%; height: 291px;" width="1351" height="291"></canvas></div>
  <!-- end particles -->
</section>
<!-- end page title -->

<!-- services -->
<section class="section">
  <div class="container">
    <div class="row row--grid">
      @foreach ($services as $service)
      <div class="col-12 col-md-6 col-xl-3">
        <!-- service -->
        <div class="service">
          <i class="ti-bolt"></i>
          <h3 class="service__title">{{ $service->title }}</h3>
          <p class="service__text">{{ $service->sub_title }}...</p>
          <a href="{{ route('news.signle', ['id' => $service->id]) }}" class="btn text-uppercase">Learn More</a>
        </div>
        <!-- end service -->
      </div>
      @endforeach

      {{-- <div class="col-12 col-md-6 col-xl-3">
        <!-- service -->
        <div class="service">
          <i class="ti-wallet"></i>
          <h3 class="service__title">Instant Conclusion</h3>
          <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
        </div>
        <!-- end service -->
      </div>

      <div class="col-12 col-md-6 col-xl-3">
        <!-- service -->
        <div class="service">
          <i class="ti-stats-up"></i>
          <h3 class="service__title">Detailed Statistics</h3>
          <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the <a href="https://smartmine.volkovdesign.com/services.html#">majority</a> have suffered alteration in some form, by injected.</p>
        </div>
        <!-- end service -->
      </div>

      <div class="col-12 col-md-6 col-xl-3">
        <!-- service -->
        <div class="service">
          <i class="ti-harddrives"></i>
          <h3 class="service__title">Power Distribution</h3>
          <p class="service__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected.</p>
        </div>
        <!-- end service -->
      </div> --}}
    </div>
  </div>
</section>
<!-- end services -->

<!-- video -->
<div class="section section--bg" data-bg="{{ asset('img/12.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- section title -->
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <a class="section__video" href="https://vimeo.com/45830194"><i class="ti-control-play"></i></a>
          <p class="section__text section__text--white section__text--head">Check out our mining farm setup. To bring you the best we must hire the best.</p>
        </div>
        <!-- end section title -->
      </div>
    </div>
  </div>
</div>
<!-- end video -->

<!-- get started -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <!-- review -->
        <div class="review">
          <blockquote class="review__blockquote">«Joining {{ config('settings.site.name') }} has been a game-changer for my crypto mining endeavors. Their platform is user-friendly, their support team is incredibly helpful, and I've seen significant returns on my investment. I highly recommend {{ config('settings.site.name') }} to anyone looking to dive into the world of crypto mining.»</blockquote>
          <span class="review__autor">Sarah Johnson
            <span>Financial Analyst</span>
          </span>
        </div>
        <!-- end review -->
      </div>

      <div class="col-12 col-lg-6">
        <!-- get started -->
        <div class="get-started">
          <h3 class="get-started__title">Create Account</h3>
          <p class="get-started__text">Unlock the potential of crypto mining and start your journey to financial growth by creating an account with {{ config('settings.site.name') }} today!</p>
          <a href="{{ route('register') }}" class="btn">get started</a>
        </div>
        <!-- end get started -->
      </div>
    </div>
  </div>
</section>
<!-- end get started -->
    
<x-Widgets.Review-Slider />
    
@endsection