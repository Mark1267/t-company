
<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Goncy Multi-Purpose themeforest">
    <meta name="description" content="Goncy - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>{{ $title ?? config('settings.site.name') }} | {{ config('settings.site.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('open') }}/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('open') }}/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('open') }}/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">

</head>

<body>
    <!-- ==================== Start Loading ==================== -->
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>
    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- ==================== Start Topbar ==================== -->
            <div class="nav-top md-hide">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="links-list">
                                <a href="#0">Terms & Condition</a>
                                <a href="#0">Privacy Policy</a>
                                <a href="#0">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <div class="social-list">
                                <a href="#0">Facebook</a>
                                <a href="#0">Twitter</a>
                                <a href="#0">LinkedIn</a>
                                <a href="#0">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==================== End Topbar ==================== -->
            @include('layouts.header')
            <main>
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('open') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('open') }}/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="{{ asset('open') }}/js/plugins.js"></script>

    <script src="{{ asset('open') }}/js/gsap.min.js"></script>
    <script src="{{ asset('open') }}/js/ScrollSmoother.min.js"></script>
    <script src="{{ asset('open') }}/js/ScrollTrigger.min.js"></script>
    <script src="{{ asset('open') }}/js/SplitText.min.js"></script>

    <!-- custom scripts -->
    <script src="{{ asset('open') }}/js/scripts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
    <script>
        'use strict';
        (function($) {

            // Init empty gallery array
            var container = [];

            // Loop over gallery items and push it to the array
            $('#gallery').find('figure').each(function() {
                var $link = $(this).find('a'),
                item = {
                    src: $link.attr('href'),
                    w: $link.data('width'),
                    h: $link.data('height'),
                    title: $link.data('caption')
                };
                container.push(item);
            });

            // Define click event on gallery item
            $('a.item').click(function(event) {

                // Prevent location change
                event.preventDefault();

                // Define object and gallery options
                var $pswp = $('.pswp')[0],
                options = {
                    index: $(this).parent('figure').index(),
                    bgOpacity: 0.85,
                    showHideOpacity: true
                };

                // Initialize PhotoSwipe
                var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
                gallery.init();
            });

        }(jQuery));
    </script>
</body>
</html>