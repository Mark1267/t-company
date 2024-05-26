@extends('layouts.app', ['title' => 'Our Plans'])

@section('content')
<!-- ==================== Start Header ==================== -->

<header class="page-header section-padding sub-bg">
 <div class="container">
     <div class="row">
         <div class="col-lg-9">
             <div class="caption">
                 <h1 style="font-size: 80px">Our Pricing Plans</h1>
                 <div class="row mt-30">
                     <div class="col-lg-5 col-md-6">
                         <div class="d-flex align-items-center">
                             <div>
                                 <div class="icon-img-80">
                                     <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
                                 </div>
                             </div>
                             <div class="text ml-30">
                                 <span class="p-style">
                                   Experience the Evolution of Energy production at {{ config('settings.site.name') }}, Where Innovation Meets Purpose</span>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 offset-lg-1 col-md-6 valign">
                         <div class="d-flex align-items-center">
                             <div class="long-arw mr-30">
                                 <img src="{{ asset('open') }}/imgs/vector-img/long-arrow.svg" alt="">
                             </div>
                             <div class="fw-500 sub-font">
                                 <span class="opacity-7">
                                     <a href="{{ route('home') }}">Home</a>
                                 </span>
                                 <span class="ml-10 mr-10">/</span>
                                 <span>Pricing</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         {{-- <div class="col-lg-3 d-flex align-items-center justify-content-end">
             <div class="img-circle">
                 <img src="{{ asset('open') }}/imgs/header/Circle.svg" alt="">
             </div>
         </div> --}}
     </div>
 </div>
</header>

<!-- ==================== End Header ==================== -->

<x-Widgets.Plan-List />

{{-- <!-- features -->
<section class="section">
    <div class="container">
        <div class="row row--grid">
            <div class="col-12 col-sm-6 col-xl-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-money"></i>
                    <h3 class="feature__title">Start with 0.005 BTC</h3>
                    <p class="feature__text">Minimum order price is 0.005 BTC for every algorithm</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-shield"></i>
                    <h3 class="feature__title">No contracts, no risk</h3>
                    <p class="feature__text">Cancel at any time and get your remaining funds back with no cancellation fee</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-rocket"></i>
                    <h3 class="feature__title">Fast delivery</h3>
                    <p class="feature__text">Massive hashing power in a short amount of time</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-thumb-up"></i>
                    <h3 class="feature__title">Mine on your favorite pool</h3>
                    <p class="feature__text">You decide how and when you want to buy hashing power and which pool to direct it to</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-pulse"></i>
                    <h3 class="feature__title">Real-time statistics</h3>
                    <p class="feature__text">Follow your workers and their performance</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-check-box"></i>
                    <h3 class="feature__title">Valid shares only</h3>
                    <p class="feature__text">Never pay for dead, faulty configured rigs or invalid shares</p>
                </div>
                <!-- end feature -->
            </div>
        </div>
    </div>
</section>
<!-- end features --> --}}

@endsection