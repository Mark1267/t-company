@extends('layouts.dashboard.guest', ['title' => 'Register'])

@section('content')
        <div class="account-pages pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center">
                            <div class="bg-dark d-inline-block p-2 rounded">
                                    <a href="{{ route('home') }}" class="bg-dark">
                                        <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="48" class="auth-logo logo-dark mx-auto">
                                        <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="48" class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                            </div>
                                
                                <h4 class="font-size-18 text-muted text-center mt-2">Free Register</h4>
                                <p class="text-muted text-center mb-4">Get your free {{ config('app.name') }} account now.</p>
                                <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                                    <div class="row">
                                        @csrf
                                        
                                        <!-- Password Reset Token -->
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" value="{{ old('email', $request->email) }}" name="email" class="form-control" id="email" placeholder="Enter email">        
                                                
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password" placeholder="Enter password">
                                                
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                                <input type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                                                
                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 mx-auto">
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Reset Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <div id="google_translate_element"></div>
                            <p class="text-white-50">Already have an account ?<a href="{{ route('login') }}" class="fw-medium text-white"> Login </a> </p>
                            <p class="text-white-50">© 2018-<script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }}</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
@endsection
