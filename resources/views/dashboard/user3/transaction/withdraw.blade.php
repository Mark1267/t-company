@extends('layouts.dashboard.user3.app', ['title' => 'New Deposit'])

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form method="POST" action="{{ (Auth::user()->admin) ? route('admin.transaction.withdraw.new.save') : route('user.transaction.withdraw.new.save') }}">
                        @csrf
                        <div class="row">
                            @can('admin')
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="users_id">User Name</label>
                                        <select class="form-select" id="users_id" name="users_id">
                                            <option></option>
                                            @foreach ($users as $user): ?>
                                                <option {{ (old('users_id') == $user->id) ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->username}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endcan
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" value="{{ old('amount') ?? $amount }}">
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Select Currency</label>
                                    <select class="form-select form-control" name="currency_id">
                                        <option></option>
                                        @foreach ($currencies as $currency)
                                            <option {{ ($currency->id == old('currency_id')) ? 'selected' : '' }} value="{{ $currency->id }}">{{ $currency->name }} ({{ $currency->network }})</option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="client_address">Your Wallet Address</label>
                                <input type="text" class="form-control" name="client_address" id="client_address" placeholder="Your Wallet Address*" value="{{ old('client_address') }}">
                                @error('client_address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> --}}
                        @can('admin')
                        <div class="row">
                            <div class="col-lg-3">
                                            <div class="mt-4 mt-lg-0">
                                                <h5 class="font-size-14 mb-3">Mark as Completed</h5>
                                                <div class="form-check mb-2">
                                                <input class="form-check-input" @if(old('status')) checked @endif type="checkbox" name="status" id="defaultCheck1">
                                                    <label class="form-check-label" for="status">Accept</label>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        @endcan
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" type="submit">Proceed</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection