<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html style="background-color: #eeeeee; padding: 10px;">
                    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mail</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
                        
    <body style="
            min-width: 300px;
            max-width: 700px;
            padding: 0;
            margin: auto;
            background-color: white;
            text-align: center;"
    >
                    
        <header style="padding-top: 10px;">
            <img style="width: 140px;" src="{{ asset(config('settings.site.logo.full')) }}" class="logo" alt="{{ config('settings.site.name') }}_LOGO">
        </header>

        <div
            class="main"
            style="
                padding: 20px;
                text-align: left;
            "
        >
            @yield('content')
            <div 
                class="main-2" 
                style="text-align: left; 
                        font-size: 10px; 
                        padding: 5px 10px;
                    "
            >
                <p style="font-size: 10px">You received this mail because you or someone registered on our platform with your email address <br> If it was not you, Please contact us.</p>
                <p style="font-size: 10px">Thank You</p>
            </div>
            <center>
                <footer style="background-color: white; color: #c7c7c7; text-align: center !important; font-size: 10px;">
                    {{-- <div style="background-color: #110769; color: white; padding: 20px 0px;">
                        <p>Great to have you on board</p>
                    </div> --}}
                        <p>{{ config('settings.site.address.full') }}</p>
                        <span style="margin: 3px 7px;">{{ config('settings.site.email.support') }} | {{ config('settings.site.email.info') }}</span>
                    <div class="foot" style="text-align: center">
                        <a href="{{ route('home') }}">{{ route('home') }}</a><br>
                        <p style="margin-top: 0;">&copy;{{ config('settings.site.name') . ' ' . date('Y') }}</p>
                    </div>
                </footer>
            </center>
        </div>
    </body>
</html>