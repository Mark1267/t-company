@extends('layouts.app', ['title' => 'Frequently Asked Queries'])

@section('content')
    <!--page header section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h2 class="text-white">Frequently Asked Queries</h2>
                        <p class="lead">Do You have any questions? We strongly recommend that you start searching for the
                            necessary information in the FAQ section.
                            If you need advice or technical assistance, do not hesitate to contact our specialists. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action new section end-->

    <x-Widgets.F-A-Qs />
@endsection