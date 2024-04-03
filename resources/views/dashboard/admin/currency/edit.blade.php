@extends('layouts.dashboard.app', ['title' => 'Update Currency'])

@section('content')
    
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Currency</h4>
    
                    <div class="pe-3" data-simplebar>
                        <form action="{{ route('admin.currency.edit.save') }}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Currency Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Currency Name*" value="{{ old('name') ?? $currency->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Currency Address*" value="{{ old('address') ?? $currency->address }}">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="symbol">Ticker Symbol</label>
                                        <input type="text" class="form-control" id="symbol" name="symbol" placeholder="Symbol*" value="{{ old('symbol') ?? $currency->symbol }}">
                                        @error('symbol')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="network">Ticker Network</label>
                                        <input type="text" class="form-control" id="network" name="network" placeholder="Network*" value="{{ old('network') ?? $currency->network }}">
                                        @error('network')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="currency_id" value="{{ $currency->id }}">
                            <div class="row">
                                <div class="col-md-12 text-center mx-auto col-12">
                                    <button type="submit" class="btn mx-2 btn-primary" type="submit">Update Currency</button>
                                    <a href="{{ route('admin.currency.delete', ['currency_id' => $currency->id]) }}" class="btn mx-2 btn-danger">Delete Currency</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection