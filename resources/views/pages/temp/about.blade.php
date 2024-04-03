@extends('layouts.app', ['title' => 'About Us'])

@section('content')
    <!--page header section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">

                        <h1 class="text-white">About Us</h1>
                        <p class="lead">We help you to achieve your dreams and to live to your expectations. The business operating system has been precisely engineered to ensure fair and instant revenue distributions to all users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->


    @include('layouts.widgets.about')

    
    @include('layouts.widgets.locations')

    <!--call to action start-->
    <section class="ptb-60 primary-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="cta-content-wrap text-white">
                        <h2 class="text-white">24/7 Expert Hosting Support Our Customers Love</h2>
                        <p>Our support team will answer all your questions, help you operate the website and explain any ambiguities. We are available 24/7 for live chat and e-mail.
                        </p>
                    </div>
                    <div class="support-action d-inline-flex flex-wrap">
                        <a href="mailto:{{ config('settings.site.email.support') }}" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span>{{ config('settings.site.email.support') }}</span></a>
                        <a href="tel:+00123456789" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> 
                        <span>+ Comming Soon</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-none d-lg-block">
                    <div class="cta-img-wrap text-center">
                        <img src="{{ asset('assets/open/') }}/assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->

    

    <x-Widgets.Review-Slider />

</div>
@endsection