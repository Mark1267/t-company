@extends('layouts.dashboard.app', ['title' => 'Add Plan'])

@section('content')
    
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Plan</h4>
    
                    <div class="pe-3" data-simplebar>
                        <form action="{{ route('admin.pricing.plan.compound.add.save') }}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Plan Category</label>
                                        <select class="form-select" name="cat_id">
                                            <option>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option {{ (($category->id == old('cat_id')) || ($cat_id == $category->id)) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('cat_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Plan Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Plan Name*" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Title (Optional)</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Plan Title*" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="min">Minimum Amount</label>
                                        <input type="number" class="form-control" id="min" name="min" placeholder="Minimum Amount*" value="{{ old('min') }}">
                                        @error('min')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="max">Maximum Amount</label>
                                        <input type="number" class="form-control" id="max" name="max" placeholder="Maximum Amount*" value="{{ old('max') }}">
                                        @error('max')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="time">Duration(Number)</label>
                                        <input type="number" class="form-control" id="time" name="time" placeholder="Duration*" value="{{ old('time') }}">
                                    </div>
                                    @error('time')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Duration Unit</label>
                                        <select class="form-select" name="time_id">
                                            <option></option>
                                            @foreach ($times as $time)
                                                <option {{ ($time->id == old('time_id')) ? 'selected' : '' }} value="{{ $time->id }}">{{ $time->suffix }}</option>
                                            @endforeach
                                        </select>
                                        @error('time_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Interval Unit</label>
                                        <select class="form-select" name="interval">
                                            <option></option>
                                            @foreach ($times as $time)
                                                <option {{ ($time->id == old('interval')) ? 'selected' : '' }} value="{{ $time->id }}">{{ $time->suffix }}</option>
                                            @endforeach
                                        </select>
                                        @error('interval')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="rate">Percent</label>
                                        <input type="number" step="00000.000001" class="form-control" id="rate" name="rate" placeholder="Percentage*" value="{{ old('rate') }}">
                                    </div>
                                    @error('rate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center mx-auto col-12">
                                    <button type="submit" class="btn btn-primary" type="submit">Add Plan</button>
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