@extends('layouts.app', ['title' => 'Our Plans'])

@section('content')
<!--page header section start-->
<section class="ptb-120 gradient-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-8">
                <div class="hero-content-wrap text-white text-center position-relative">

                    <h1 class="text-white">Our Experts</h1>
                    <p class="lead">A team of crypto-enthusiasts determined to revolutionize the world of cloud mining.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--page header section end-->
    <x-Widgets.Team-Slider />
@endsection