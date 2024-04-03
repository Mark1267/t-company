@extends('layouts.dashboard.guest', ['title' => 'Register'])

@section('content')
        <div class="account-pages pt-5" style="background-image: url({{ asset('assets/open/assets/img/hero14.jpg') }}); background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-1 p-md-2">
                                <h4 class="font-size-18 text-muted text-center mt-2">Free Register</h4>
                                <p class="text-muted text-center mb-1">Get your free {{ config('app.name') }} account now.</p>
                                <div class="text-center">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset(config('settings.site.logo.full')) }}" alt="" height="58" class="auth-logo logo-dark mx-auto">
                                        </a>
                                </div>
                                <form class="form-horizontal" method="POST" action="{{ route('register.save') }}">
                                    <div class="row">
                                        @csrf
                                        <input type="hidden" name="ref" value="{{ $username ?? null }}">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="full_name">Full Name</label>
                                                <input type="text" class="form-control" value="{{ old('full_name') }}" name="full_name" id="full_name" placeholder="Enter Full Name">
                                                @error('full_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" class="form-control" value="{{ old('username') }}" name="username" id="username" placeholder="Enter username">
                                                
                                                @error('username')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="phone">Phone Number</label>
                                                <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">        
                                                
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Enter email">        
                                                
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>  
                                        @foreach ($accounts as $account)
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="account[{{ $account->id }}]">{{ $account->name }} Wallet ID(Optional)</label>
                                                    <input type="text" class="form-control" value="{{ old('account.'.$account->id) }}"
                                                        name="account[{{ $account->id }}]" id="account[{{ $account->id }}]"
                                                        placeholder="Enter {{ $account->name }} Wallet ID(Optional)">
                                                
                                                    @error('account.'.$account->id)
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password" placeholder="Enter password">
                                                
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                                <input type="password" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                                                
                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" @if(old('term') == 'on') checked @endif name="term" id="term">
                                                <label class="form-check-label fw-normal" for="term">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                
                                                @error('term')
                                                    <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center ml-auto mr-auto">
                                            <div class="mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                            <p class="text-white-50 my-2">Already have an account ?<a href="{{ route('login') }}" class="fw-medium text-primary"> Login </a> </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="mt-5 text-center">
                            <div id="google_translate_element"></div>
                            <p class="text-white-50">Already have an account ?<a href="{{ route('login') }}" class="fw-medium text-primary"> Login </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }}</p>
                        </div> --}}
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
@endsection
