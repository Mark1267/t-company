@extends('layouts.app', ['title' => 'Our Plans'])

@section('content')
<!--page header section start-->
<section class="ptb-120 gradient-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-8">
                <div class="hero-content-wrap text-white text-center position-relative">

                    <h1 class="text-white">Our Investment Plans</h1>
                    <p class="lead">We help you to achieve your dreams and to live to your expectations. The business operating system has been precisely engineered to ensure fair and instant revenue distributions to all users.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--page header section end-->
    <x-Widgets.Plan-List />
@endsection