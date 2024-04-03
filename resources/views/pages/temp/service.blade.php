@extends('layouts.app', ['title' => 'Our Services'])

@section('content')
    <!--page header section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h2 class="text-white">Our Services</h2>
                        <p class="lead">With {{ config('settings.site.name') }}, our aim is to help the financial sector with the opportunities and challenges of the blockchain technology by offering outstanding solutions in the field of distributed ledgers, cryptocurrencies and digital assets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action new section end-->

    @include('layouts.widgets.services')

    
    @include('layouts.widgets.features')
    
    <x-Widgets.Review-Slider />
    
@endsection