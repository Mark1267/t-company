

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   {{-- <meta name="viewport" content="width=1280"> --}}
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset(config('settings.site.logo.favi')) }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>{{ $title ?? config('settings.site.name') }} | {{ config('settings.site.name') }}</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/open/assets/css/main.css') }}">
    <!-- endbuild -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\btn.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Rajdhani:wght@300;400;500;600;700&display=swap");
        *{
            font-family: 'Roboto', sans-serif;
        }

        h1, h2, h3, h4, h5, h6{
            font-family: 'Bruno Ace SC', cursive !important;
        }
        .bttn-gradient.bttn-primary {
            background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#00bbd4),color-stop(1,#3f51b5));
            background-image: -webkit-linear-gradient(top,#00bbd4,#3f51b5);
            background-image: linear-gradient(180deg,#00bbd4 0,#3f51b5);
            background-image: -webkit-linear-gradient(93deg,#f67a3c,#014cda);
            color: #fff;
        }
        a[class*="bt"]{
            font-family: 'Bruno Ace SC', cursive !important;
        }
    </style>
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            {{-- <img src="assets/img/logo1.png" alt="logo" class="img-fluid" /> --}}
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->
    @include('layouts.header')

    <div class="main">

       @yield('content')

    </div>

    @include('layouts.footer')

    <!--footer bottom copyright start-->
    <div class="footer-bottom py-3 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="copyright-wrap small-text">
                        <p class="mb-0">&copy; {{ config('settings.site.name') }} 2019-{{ date('Y') }}, All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="terms-policy-wrap text-lg-right text-md-right text-left">
                        <ul class="list-inline">
                             <li class="list-inline-item"><a class="small-text" href="{{ route('news.signle', ['id' => 1]) }}">Terms & Condition</a></li>
                            <li class="list-inline-item"><a class="small-text" href="{{ route('faq') }}">FAQs</a></li>
                            <li class="list-inline-item"><a class="small-text" href="{{ route('contact') }}">Need Support ?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('assets/open/assets/js/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/jquery.rcounterup.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/validator.min.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/vendors/hs.megamenu.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/open/assets/js/calculator.js') }}"></script>
    <script>
        $('.clients-carouselm').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 10,
            dots: false,
            slideTransition: 'linear',
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
            autoplaySpeed: 2500,
            responsive: {
                0: {
                    items: 2
                },
                500: {
                    items: 3
                },
                600: {
                    items: 4
                },
                800: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
    </script>
    <!--endbuild-->
    {!! config('settings.config.tido') !!}
</body>
</html>