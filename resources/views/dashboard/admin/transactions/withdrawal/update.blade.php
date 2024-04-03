@extends('layouts.dashboard.app', ['title' => 'Update Withdrawal'])

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
                    <form method="POST" action="{{route('admin.transaction.withdraw.update.save')}}">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $transaction->id }}">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" value="{{ old('amount') ?? $transaction->amount }}">
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Select Currency</label>
                                    <select class="form-select" name="currency_id">
                                        <option></option>
                                        @foreach ($currencies as $currency)
                                            <option {{ ($currency->id == old('currency_id') || ($currency->id == $transaction->account_id)) ? 'selected' : '' }} value="{{ $currency->id }}">{{ $currency->name }} ({{ $currency->network }})</option>
                                        @endforeach
                                    </select>
                                    @error('currency_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="client_address">Your Wallet Address</label>
                                <input type="text" class="form-control" name="client_address" id="client_address" placeholder="Your Wallet Address*" value="{{ old('client_address') ?? $transaction->client_address }}">
                                @error('client_address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="users_id" value="{{ $transaction->users_id }}">
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" type="submit">Update Withdrawal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection