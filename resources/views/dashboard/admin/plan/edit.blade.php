@extends('layouts.dashboard.app', ['title' => 'Edit Plan'])

@section('content')
    
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Plan</h4>
    
                    <div class="pe-3" data-simplebar>
                        <form action="{{ route('admin.plan.edit.save')}}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Plan Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Plan Name*" value="{{ old('name') ?? $plan->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Plan Title*" value="{{ old('title') ?? $plan->title }}">
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
                                        <input type="number" class="form-control" id="min" name="min" placeholder="Minimum Amount*" value="{{ old('min') ?? $plan->min }}">
                                        @error('min')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="max">Maximum Amount</label>
                                        <input type="number" class="form-control" id="max" name="max" placeholder="Maximum Amount*" value="{{ old('max') ?? $plan->max }}">
                                        @error('max')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="time">Duration(Hours)</label>
                                        <input type="number" class="form-control" id="time" name="time" placeholder="Duration*" value="{{ old('time') ?? $plan->time }}">
                                        @error('time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Hourly Percent</label>
                                        <input type="number" class="form-control" id="rate" name="rate" placeholder="Percentage*" value="{{ old('rate') ?? $plan->rate }}">
                                        @error('rate')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                            <div class="row">
                                <div class="col-md-6 text-center mx-auto col-12">
                                    <button type="submit" class="btn btn-primary" type="submit">Update Plan</button>
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