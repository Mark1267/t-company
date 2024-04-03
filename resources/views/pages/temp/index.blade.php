@extends('layouts.app', ['title' => 'Welcome'])

@section('content')
<!--hero section start-->
<section class="ptb-120 gradient-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="hero-content-wrap text-white position-relative">
                    <h1 class="text-white">RISK-FREE CRYPTO TRADING AND CLOUD MINING COMPANY</h1>
                    <p class="lead">We help you to achieve your dreams and to live to your expectations. The business
                        operating system has been precisely
                        engineered to ensure fair and instant revenue distributions to all users.
                    </p>
                    <a href="{{ route('register') }}" class="bttn-gradient btn-brand-03 bttn-lg bttn-primary">Get Start Now</a>
                    {{-- <a href="{{ route('register') }}" class="btn btn-brand-03 btn-lg">Get Start Now</a> --}}
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="img-wrap my-5 my-md-0">
                    <img src="{{ asset('assets/open/') }}/images/8.png" alt="email hosting" class="img-fluid" style="
                        border: dotted;
                        border-radius: 229px;
                        border-color: #0eb871;"
                        >
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

@include('layouts.widgets.chart.tape')
<!--promo section start-->
<section class="promo-section ptb-100 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="section-heading text-center">
                    <h2>RISK-FREE CRYPTO TRADING AND CLOUD MINING INVESTMENTS</h2>
                    <p>Welcome to the website of {{ config('settings.site.name') }}! Our investment platform is a product of
                        careful preparation and fruitful work of experts in the field of Bitcoin mining,
                        highly profitable trade in cryptocurrencies and online marketing. Using modern methods
                        of doing business and a personal approach to each client, we offer a unique investment
                        model to people who want to use Bitcoin not only as a method of payment,
                        but also as a reliable source of stable income. {{ config('settings.site.name') }} business uses only
                        modern mining equipment and trades at the most stable markets, which minimizes
                        the risk of financial loss to customers and guarantees them a stable income accrued
                        every calendar day.

                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center justify-content-sm-center">
            <div class="col-md-6 col-lg-4">
                <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                    <div class="card-body">
                        <div class="pb-2">
                            <span class="fas fa-cubes icon-size-lg color-primary"></span>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5>Create an Account</h5>
                            <p class="mb-0">To open an account, simply click on the register button on the main page.
                                The next page is the registration form that you need to fill out.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                    <div class="card-body">
                        <div class="pb-2">
                            <span class="fas fa-headset icon-size-lg color-primary"></span>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5>Make a Deposit</h5>
                            <p class="mb-0">To start growing your Capital, you need to make a deposit. You can do this
                                from the deposit section of your account.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card single-promo-card single-promo-hover text-center p-2 mt-4">
                    <div class="card-body">
                        <div class="pb-2">
                            <span class="fas fa-lock icon-size-lg color-primary"></span>
                        </div>
                        <div class="pt-2 pb-3">
                            <h5>Withdraw Earns</h5>
                            <p class="mb-0">It only takes a few seconds to initiate your withdrawals and have your
                                earnings paid to you. All of our withdrawals are instant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--promo section end-->
@include('layouts.widgets.services')


{{-- <center> <a class="homecerbtn" href="images/deloitepay%20COMPANY_PROFILE.pdf">
        <h1>View Our Corperate Profile</h1>
    </a> </center>

<br><br>


<br><br>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/jCmJcQxVX7U">
</iframe>
<br><br> --}}

<x-Widgets.Stats />


@include('layouts.widgets.features')

@include('layouts.widgets.locations')

<x-Widgets.Plan-List />

@include('layouts.widgets.about')


{{-- <div class="choose-head">

    <h3> <a style="color: #0000FF;" href="assets/img/certifi.png">
            <center> VIEW COMPANY CERTIFICATE </center>
        </a> </h3>
</div> --}}

<x-Widgets.Team-Slider />
<x-Widgets.Review-Slider />

<!--call to action new section start-->
<section class="ptb-60 primary-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <div class="cta-content-wrap text-white text-center">
                    <h2 class="text-white"><span style="color:#24d0e1; font-size:60px">10%</span> REFERRAL COMMISSION
                    </h2>
                    <p class="lead">You can earn additional income by being a participant in our affiliate program by
                        helping us advertise and promote {{ config('settings.site.name') }} with your link.</p>
                    <a href="{{ route('register') }}" class="btn btn-brand-03 mt-2">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action new section end-->

<x-Widgets.Transaction-List />

<!--our team section start-->
<section class="client-section  ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r1.png" alt="" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r2.png" alt="" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r3.png" alt="" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r4.png" alt="" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r5.png" alt="" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r6.png" alt="" class="customer-logo">
                    </div>
                    <div class="item single-customer">
                        <img src="{{ asset('assets/open') }}/assets/img/customers/r7.png" alt="" class="customer-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our team section end-->

@endsection