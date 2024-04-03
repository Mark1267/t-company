@extends('layouts.dashboard.app', ['title' => Auth::user()->username . "'s profile"])

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ (Auth::user()->admin) ? route('admin.profile.save') : route('user.profile.save') }}">
                    <div class="row">
                        @csrf
                        @include('layouts.dashboard.widgits.forms.user.edit')
                        <div class="col-md-6 mx-auto">
                            <div class="d-grid mt-4">
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