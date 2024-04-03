@extends('layouts.app', ['title' => 'About Us'])

@section('content')
<!-- page title -->
<section class="section section--first">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h1 class="section__title section__title--page">About Us</h1>
                <p class="section__text">Spurred by both serendipity and deliberate choices. We've navigated through the dynamic landscape of crypto mining, adapting and innovating along the way to better serve our clients' needs.</p>
            </div>
            <!-- end section title -->
        </div>
    </div>

    <!-- particles -->
    <div id="canvas" class="section__particles"><canvas class="vanta-canvas" style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 100%; height: 291px;" width="1351" height="291"></canvas></div>
    <!-- end particles -->
</section>
<!-- end page title -->

<!-- about -->
<section class="section section--border-bottom">
    <div class="container">
        <div class="row row--grid">
            <div class="col-12 col-lg-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-bar-chart"></i>
                    <h3 class="feature__title">Our Mission</h3>
                    <p class="feature__text">Our primary focus is to offer cost effective solutions to cryptocurrency hobbyists and professionals. We have the conviction our enterprise can follow you in the adventure or cryptocurrency.</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-lg-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-headphone-alt"></i>
                    <h3 class="feature__title">Our Offer</h3>
                    <p class="feature__text">Located in LA, USA, the Cloud Mining farm is accessible to members 24/7 and they have access to a multi language technical support, which is an exclusivity in the industry.</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12 col-lg-4">
                <!-- feature -->
                <div class="feature">
                    <i class="ti-world"></i>
                    <h3 class="feature__title">For Who?</h3>
                    <p class="feature__text">The Smart Mine system is ideal for beginners. Our system also offers solutions for experts and large-scale entrepreneurs from one unit farm to multiple tier-1 home dedicated mining farm.</p>
                </div>
                <!-- end feature -->
            </div>

            <div class="col-12">
                <a href="{{ route('register') }}" class="btn btn--center btn--section btn--shadow">get started</a>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<x-Widgets.Team-Slider />

<x-Widgets.Review-Slider />

{{-- <!-- partners -->
<div class="partners section--border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- partners slider -->
                <div class="owl-carousel partners__slider">         
                            <div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/audiojungle-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/codecanyon-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/photodune-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/themeforest-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/videohive-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/3docean-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/activeden-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/audiojungle-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/codecanyon-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/photodune-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/themeforest-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/videohive-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/3docean-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item cloned active" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/activeden-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item cloned active" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/audiojungle-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item cloned active" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/codecanyon-light-background.png" alt="">
                        </a>
                    </div></div><div class="owl-item cloned active" style="width: 160px; margin-right: 30px;"><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/photodune-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/themeforest-light-background.png" alt="">
                        </a>
                    </div></div><div class="item">
                        <a href="https://smartmine.volkovdesign.com/about.html#">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/videohive-light-background.png" alt="">
                        </a>
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                <!-- end partners slider -->
            </div>
        </div>
    </div>
</div>
<!-- end partners --> --}}
@endsection