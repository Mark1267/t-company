@extends('layouts.app', ['title' => 'Our Plans'])

@section('content')

<!-- page title -->
<section class="section section--first">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h1 class="section__title section__title--page">Pricing</h1>
                <p class="section__text">The fair approach to cloud mining pay as you mine without upfront payments.</p>
            </div>
            <!-- end section title -->
        </div>
    </div>

    <!-- particles -->
    <div id="canvas" class="section__particles"><canvas class="vanta-canvas" style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 100%; height: 291px;" width="1351" height="291"></canvas></div>
    <!-- end particles -->
</section>
<!-- end page title -->

<x-Widgets.Plan-List />

<!-- features -->
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
<!-- end features -->

@endsection