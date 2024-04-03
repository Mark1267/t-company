@extends('layouts.dashboard.app', ['title' => 'Add A new User'])

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <div class="card">
                <div class="card-header">
                    <h4>A a New User/Admin</h4>
                </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.add.save') }}">
                    <div class="row">
                        @csrf
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="full_name">Full Name</label>
                                <input type="text" class="form-control" value="{{ old('full_name')}}" name="full_name" id="full_name" placeholder="Enter Full Name">
                                @error('full_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control" value="{{ old('username')}}" name="username" id="username" placeholder="Enter username">
                                
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Enter email">        
                                
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">        
                                
                                @error('phone')
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
                        <div class="col-lg-12">
                            <div>
                                <h5 class="font-size-14 mb-3">Admin Checkboxes</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="admin" checked id="admin">
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection