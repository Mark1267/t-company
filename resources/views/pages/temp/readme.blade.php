@extends('layouts.app', ['title' => 'Developers Comment'])

@section('css')
    <style>
        .disclaimer{
            font-family: monospace;
            margin: auto;
        }
    </style>
@endsection

@section('content')
<x-page-header title="Developer's Disclaimer" page="Disclaimer" :pagebg="asset('img/27.jpg')" />
    <div class="container padding-top">
        <div class="row">
            <div class="col-md-12 disclaimer mx-auto text-center col-12">
                    <span class="text-muted"># trustcryptomining</span>

                <h1>WEBSITE DISCLAIMER</h1>    

                <h2>Copyright protected</h2>   

                <h3>Created by Mark Williams</h3>    

                <h4>04/22/2021</h4>    

                <h1><strong>WEBSITE DISCLAIMER</strong></h1> 
                <p>The information provided by (
                    <strong>{{ Str::upper(config('app.name')) }}</strong>
                    ) (“we”, “us” or “our”) on <strong>
                        <a href="{{  route('home') }}" class="text-underline">{{ route('home') }}</a></strong>
                     (the “site”) if any, is for general informational purposes only. All information on the site is provided in good faith, however the <strong>DEVELOPER</strong> of the site make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability availability or completeness of any information on the site. <strong>UNDER NO CIRCUMSTANCE SHALL THE DEVELOPER HAVE ANY LIABILITY TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF THE SITE AND YOUR RELIANCE ON ANY INFORMATION ON THE SITE IS SOLELY AT YOUR OWN RISK.</strong>
                </p>

                <h1><strong>EXTERNAL LINKS DISCLAIMER</strong></h1>
                <p>The site may contain (or you may be sent through the site) links to other websites or content belonging to or originating from third parties or links to websites and features in banners or other advertising. Such external links are not investigated, monitored, or checked for accuracy, adequacy, validity, reliability, availability or completeness by the developer. <strong>DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR THE ACCURACY OR RELIABILITY OF ANY INFORMATION OFFERED BY THIRD – PARTY WEBSITES LINKED THROUGH THE SITE OR ANY WEBSITE OR FEATURE LINKED IN ANY BANNER OR OTHER ADVERTISING. WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND THIRD – PARTY PROVIDERS OF PRODUCTS OR SERVICES.</strong></p>

                <h1><strong>Mark Williams </strong><h1>
                <em>(Sudo name)</em> <a href="mailto:markwilliams1267@gmail.com"> markwilliams1267@gmail.com</a>
            </div>
        </div>
    </div>
@endsection