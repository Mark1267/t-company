<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title> {{ $title }} | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Mining Crypto Investment" name="description" />
        <meta content="Thomas Jacobs" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset(config('app.logo.favi')) }}">
        
        <!-- jvectormap -->
        <link href="{{ asset('assets/dashboard') }}/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/dashboard') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        {{-- <link href="{{ asset('css/bootstrap4-neon-glow.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
        <link href="{{ asset('assets/dashboard') }}/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/dashboard') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/dashboard') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        @yield('css')
        @toastr_css
        <style>
            #page-topbar { z-index: 1 !important;}

        h1, h2, h3, h4, h5, h6{
            color: white;
        }
        </style>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script>
        
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Rajdhani:wght@300;400;500;600;700&display=swap");
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>
    </head>
    <body data-sidebar="dark" data-topbar='dark'>
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include('layouts.dashboard.header')
<div class="vertical-menu">

    <div data-simplebar class="h-100">
            
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.dashboard.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © {{ config('app.name') }}.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/dashboard') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('assets/dashboard') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/dashboard') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('assets/dashboard') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets/dashboard') }}/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts js -->
        <script src="{{ asset('assets/dashboard') }}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('assets/dashboard') }}/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{ asset('assets/dashboard') }}/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        @yield('srcipts')
        
        <script src="{{ asset('assets/dashboard') }}/js/pages/dashboard.init.js"></script>

        <script src="{{ asset('assets/dashboard') }}/js/app.js"></script>
        @toastr_js
        @toastr_render
        
    {!! config('main.config.tido') !!}
</body>
</html>