<!-- app -->
<div class="section section--bg" data-bg="{{asset('img/3.jpeg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title -->
                <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
                    <h2 class="section__title section__title--white" style="font-weight: 800">{{ $myData()['users'] }}</h2>
                    <h1 class="section__title section__title--white">USERS TRUST US</h1>
                    <p class="section__text section__text--white">Our platform stands as a trusted choice for cryptocurrency enthusiasts. The growing community relies on {{ config('settings.site.name') }} for its commitment to security, transparency, and delivering reliable services, making us a go-to destination for users navigating the complexities of the crypto world.</p>
                    <div class="section__app">
                        <a href="{{ route('register') }}" class="btn btn--shadow">get started</a>
                        <a href="{{ route('login') }}" class="btn btn--shadow">Login</a>
                    </div>
                </div>
                <!-- end section title -->
            </div>
        </div>
    </div>
</div>
<!-- end app -->