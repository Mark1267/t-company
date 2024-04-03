<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <title>
        {{ $title ?? config('settings.site.name') }} | {{ config('settings.site.name') }}
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="invest investments assets plan portfolio dollars online money quick cryptocurrency currency bitcoin ethereum">
    <meta name="author" content="{{ config('settings.site.name') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/dash') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/dash') }}/images/ico/favicon.png">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dash') }}/css/vendors.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dash') }}/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/dash') }}/css/pages/login-register.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dash') }}/fonts/feather/style.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dash') }}/css/style.css">
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
        integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="vertical-layout vertical-menu 1-column bg-full-screen-image menu-expanded blank-page blank-page"
    data-open="click" data-menu="vertical-menu" data-col="1-column">
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy;
                <?php echo date('Y'); ?> <a class="text-bold-800 grey darken-2"
                    href="{{ route('home') }}" target="_blank">{{ config('settings.site.name') }}</a>, All rights reserved.
            </span>
            {{-- <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i
                    class="ft-heart pink"></i></span> --}}
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script type="text/javascript" src="{{ asset('assets/dash') }}/vendors/js/ui/jquery.sticky.js">
    </script>
    <script src="{{ asset('assets/dash') }}/vendors/js/vendors.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/dash') }}/clipboard.min.js'; ?>"></script>
    <!-- BEGIN VENDOR JS-->
    <script type="text/javascript">
        var iclp = new ClipboardJS('.i-block');
                iclp.on('success', function(e) {
                    $(e.trigger).append("<span class='ic-badge badge badge-success'>copied</span>");
                    setTimeout(function() {
                        $('.i-block').children('.ic-badge').remove();
                    }, 3000);
                });
    
                iclp.on('error', function(e) {
                    $(e.trigger).append("<span class='ic-badge badge badge-danger'>Error</span>");
                    setTimeout(function() {
                        $('.i-block').children('.ic-badge').remove();
                    }, 3000);
                });
    </script>

    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/buttons.flash.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/jszip.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/pdfmake.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/vfs_fonts.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/buttons.html5.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/buttons.print.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/forms/validation/jqBootstrapValidation.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/forms/icheck/icheck.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/charts/chart.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('assets/dash') }}/vendors/js/charts/echarts/echarts.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/editors/ckeditor/ckeditor.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/datatable/datatables.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/vendors/js/tables/datatable/dataTables.buttons.min.js"
        type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->

    <script src="{{ asset('assets/dash') }}/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/js/core/app.js" type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/js/scripts/customizer.js" type="text/javascript">
    </script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/dash') }}/js/scripts/pages/dashboard-crypto.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/js/scripts/forms/form-login-register.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/js/scripts/editors/editor-ckeditor.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dash') }}/js/scripts/tables/datatables/datatable-advanced.js"
        type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>