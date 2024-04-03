@php
    use App\Traits\GeneralTraits;
@endphp
@extends('layouts.dashboard.app', ['title' => Auth::user()->username . "'s notifications"])

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Notifications</h4>

                <div class="pe-3" data-simplebar>
                @foreach($feeds as $alert)
                    <a href="{{-- route('admin.user.profile') --}}" class="text-body alert-{{ $alert->type }} p-2 my-4 rounded d-block">
                        <div class="d-flex py-3">
                            <div style="border-radius: 50%; color: white;" class="flex-shrink-1 me-3 bg-{{ $alert->type }} p-3 px-4 align-self-center">
                                {{ Str::substr($alert->type, 0, 1) }}
                            </div>

                        @can('admin')
                            @if (Auth::user()->id != $alert->user->id)
                                <p>{{ $alert->user->name }}</p>
                            @endif
                        @endcan
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-14 mb-1">{{ $alert->user->username }}</h5>
                                <p class="text-truncate mb-0">
                                {{ $alert->message }}
                                </p>
                            </div>
                            <div class="flex-shrink-0 font-size-13">
                            {{ GeneralTraits::duration($alert->created_at, now()) }}
                            </div>
                        </div>
                    </a>
                @endforeach
                </div>
                {{ $feeds->links() }}
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection