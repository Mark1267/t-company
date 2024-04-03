@extends('layouts.dashboard.app', ['title' => 'Update a Deposit'])

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
                    <form method="POST" action="{{ route('admin.transaction.deposit.update.save') }}">
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
                                    <label class="form-label">Select Plan</label>
                                    <select class="form-select" name="plan_id">
                                        <option></option>
                                        @foreach($plans as $plan)
                                            <option {{ (($plan->id == (old('plan_id'))) || ($plan->id == $transaction->plan_id)) ? 'selected' : '' }} value="{{ $plan->id }}">{{ $plan->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('plan_id')
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
                        @can('admin')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-4 mt-lg-0">
                                        <h5 class="font-size-14 mb-3">Mark as Completed</h5>
                                        <div class="form-check mb-2">
                                        <input class="form-check-input" @if(old('status')) checked @endif type="checkbox" name="status" />
                                            <label class="form-check-label" for="">Accept</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endcan
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" type="submit">Update Deposit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection