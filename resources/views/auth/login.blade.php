@extends('layouts.dashboard.guest', ['title' => 'Login'])

@section('content')
<section class="flexbox-container" style="background-image: url({{ asset('img/25.jpg') }}); background-size: cover;">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-112 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <img src="{{ asset(config('settings.site.logo.full')) }}"
                            style="width: 100px;" alt="branding logo">
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>Easily Using</span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login.save') }}">
                            @csrf
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                                                                    
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                <div class="form-control-position">
                                    <i class="la la-key"></i>
                                </div>
                            </fieldset>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left mt-1">
                                    <fieldset>
                                        <input type="checkbox" id="remember-me"
                                            class="chk-remember">
                                        <label for="remember-me"> Remember Me</label>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                                    <a href="{{ route('password.request') }}" class="card-link">Forgot Password?</a>
                                </div>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-primary mx-auto">
                                    <i class="ft-unlock"></i> Login
                                </button>
                            </center>
                        </form>
                    </div>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                        <span>New to {{ config('settings.site.name') }}?</span>
                    </p>
                    <div class="card-body">
                        <a href="{{ route('register') }}" class="btn btn-outline-info btn-block"><i class="ft-user"></i>
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection