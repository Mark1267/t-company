@extends('layouts.app', ['title' => 'Frequently Asked Queries'])

@section('content')
<!-- page title -->
<section class="section section--first">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h1 class="section__title section__title--page">FAQ</h1>
                <p class="section__text">Find answers to all your questions here</p>
            </div>
            <!-- end section title -->
        </div>
    </div>

    <!-- particles -->
    <div id="canvas" class="section__particles"><canvas class="vanta-canvas" style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 100%; height: 291px;" width="1351" height="291"></canvas></div>
    <!-- end particles -->
</section>
<!-- end page title -->

<x-Widgets.F-A-Qs />

<x-Widgets.Review-Slider />

@endsection