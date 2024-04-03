@extends('layouts.dashboard.app', ['title' => Auth::user()->username ])
@section('css')
    <style>
        .blink_me {
        animation: blinker 1s linear infinite;
        }
        
        @keyframes blinker {
        50% {
        opacity: 0;
        }
    }
    </style>
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Admin</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <x-Admin.Overview.Account-Summary />

    <x-User.Overview.Investment-Table :tableData="$transactions" />
    
    <x-Dashboard.Widgets.Compound.Investment-Table :data="$compounds" />

@endsection