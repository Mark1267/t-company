@extends('layouts.dashboard.app', ['title' => 'Send to a User'])

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('admin.mail.private.send') }}">
                    @csrf
                    <input type="hidden" name="template_id" value="{{ $template->id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" readonly value="{{ $template->subject }}" name="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="users">Users</label>
                                <select class="form-select"  name="users_id">
                                    <option value=""></option>
                                    @foreach($users as $user): ?>
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-center mx-auto col-12">
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection