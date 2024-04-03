@extends('layouts.dashboard.guest', ['title' => 'Login'])

@section('content')
<div class="account-pages pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="bg-dark d-inline-block p-2 rounded">
                                <a href="{{ route('home') }}" class="">
                                    <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="48" class="auth-logo logo-dark mx-auto">
                                    <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="48" class="auth-logo logo-light mx-auto">
                                </a>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::get('status'))
                            <p class="alert alert-success">{{ Session::get('status') }}</p>
                        @endif
                        
                        <h4 class="font-size-18 text-muted text-center mt-2">Forgot Password</h4>
                        <p class="text-muted text-center mb-4">Log in to {{ config('app.name') }} account now.</p>
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="Enter Email">
                                        
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mx-auto">
                                    <div class="d-grid mt-4">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <div id="google_translate_element"></div>
                    <p class="text-white-50">Don't have an account ?<a href="{{ route('register') }}" class="fw-medium text-white"> Register </a> </p>
                    <p class="text-white-50">© 2018-<script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }}</p>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end Account pages -->
@endsection