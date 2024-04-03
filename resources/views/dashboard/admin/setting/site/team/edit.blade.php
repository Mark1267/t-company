@extends('layouts.dashboard.app', ['title' => 'Update a team member'])

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin.settings.site.teams.update.save', ['id' => $team->id]) }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                            <div class="col-md-12 mb-1">
                                <label for="image" class="col-md-12 col-form-label">Team Member Image</label>
                                <input class="form-control" type="file" name="image" id="image">
                                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name*" value="{{ old('name') ?? $team->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="facebook">FaceBook Link</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="FaceBook Link*" value="{{ old('facebook') ?? $team->facebook }}">
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="linkdin">linkdin Link</label>
                                    <input type="text" class="form-control" name="linkdin" id="linkdin" placeholder="linkdin Link*" value="{{ old('linkdin') ?? $team->linkdin }}">
                                    @error('linkdin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="twitter">twitter Link</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter" placeholder="twitter Link*" value="{{ old('twitter') ?? $team->twitter }}">
                                    @error('twitter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="instagram">instagram Link</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="instagram Link*" value="{{ old('instagram') ?? $team->instagram }}">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="facebook">google Link</label>
                                    <input type="text" class="form-control" name="google" id="google" placeholder="google Link*" value="{{ old('google') ?? $team->google }}">
                                    @error('google')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="rank">Rank(CEO or Customer etc.)</label>
                                    <input type="text" class="form-control" name="rank" id="rank" placeholder="rank Link*" value="{{ old('rank') ?? $team->rank }}">
                                    @error('rank')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" type="submit">Update Team Member</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection