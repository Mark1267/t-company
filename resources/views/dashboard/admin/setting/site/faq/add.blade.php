@extends('layouts.dashboard.app', ['title' => 'Add a FAQ'])

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{ route('admin.settings.site.faq.add.save') }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="question">Question</label>
                                    <input type="text" class="form-control" name="question" id="question" placeholder="Question*" value="{{ old('question') }}">
                                    @error('question')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="answer">Answer</label>
                                    <input type="text" class="form-control" name="answer" id="answer" placeholder="Answer*" value="{{ old('answer') }}">
                                    @error('answer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" type="submit">Add FAQ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection