<div class="col-md-12">
    <div class="mb-4">
        <label class="form-label" for="full_name">Full Name</label>
        <input type="text" class="form-control" value="{{ old('full_name') ?? $user->full_name }}" name="full_name" id="full_name" placeholder="Enter Full Name">
        @error('full_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div class="mb-4">
        <label class="form-label" for="username">Username</label>
        <input type="text" class="form-control" value="{{ old('username') ?? $user->username }}" name="username" id="username" placeholder="Enter username">
        
        @error('username')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div class="mb-4">
        <label class="form-label" for="email">Email</label>
        <input type="email" value="{{ old('email') ?? $user->email }}" name="email" class="form-control" id="email" placeholder="Enter email">        
        
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div class="mb-4">
        <label class="form-label" for="phone">Phone Number</label>
        <input type="text" value="{{ old('phone') ?? $user->phone }}" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">        
        
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