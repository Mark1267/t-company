@extends('layouts.dashboard.app', ['title' => 'Add a Review'])

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin.settings.site.reviews.add.save') }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                            <div class="col-md-12 mb-1">
                                <label for="image" class="col-md-12 col-form-label">Client Image</label>
                                <input class="form-control" type="file" name="image" id="image">
                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name*" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="stars">Stars</label>
                                    <input type="number" class="form-control" name="stars" id="stars" placeholder="Stars*" value="{{ old('stars') }}">
                                    @error('stars')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="rank">Rank(CEO or Customer etc.)</label>
                                    <input type="text" class="form-control" name="rank" id="rank" placeholder="Rank*" value="{{ old('rank') }}">
                                    @error('rank')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="review">Review</label>
                                    <textarea class="form-control" name="review" id="review">{{ old('review') }}</textarea>
                                    @error('review')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" type="submit">Add Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection