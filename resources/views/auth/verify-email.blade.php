@extends('layouts.dashboard.guest', ['title' => 'Verify Email'])

@section('content')
        <div class="account-pages pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 text-center">
                        <div class="card">
                            <div class="card-body p-4">
                                <a href="{{ route('home') }}" class="">
                                    <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="48" class="auth-logo logo-dark mx-auto">
                                    <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="48" class="auth-logo logo-light mx-auto">
                                </a>
                                
                                <h4 class="font-size-18 text-center mt-2">Email Verfication</h4>
                                <p class="mb-4">Verify your email to gain access to your free {{ config('app.name') }} account now.</p>
                                <div class="row">
                                    <div class="col-7 my-5 mx-auto">
                                        <h3 class="">We have sent a verification mail to your email.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <p class="text-white-50">Already verified ?<form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a 
                                    class="waves-effect text-white" 
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                >
                                <input type="hidden" value="verify" name="from" />
                                <i class="mdi mdi-logout-variant"></i> {{ __('Log Out') }}
                                </a>
                            </form> </p>
                            <p class="text-white-50">© 2018-<script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }}</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
@endsection
