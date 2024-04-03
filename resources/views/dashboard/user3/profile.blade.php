@extends('layouts.dashboard.user3.app', ['title' => Auth::user()->username . "'s profile"])

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.profile.save') }}">
                    <div class="row">
                        @csrf
                        @include('layouts.dashboard.widgits.forms.user.edit')
                        @foreach ($accounts as $account)
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label" for="account">{{ $account->name }} Account ID:</label>
                                    <input type="text" class="form-control" name="account[{{ $account->id }}]" value="{{ $account->user_wallet }}" id="account" placeholder="{{ $account->name }} Account ID*">
                                    
                                    @error('account')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 text-center mx-auto">
                            <div class="d-grid mt-1">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                            </div>
                            {{-- <a href="{{ route('') }}" class="text-danger"></a> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection