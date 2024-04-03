@extends('layouts.dashboard.app', ['title' => 'Edit User'])

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <div class="card">
                <div class="card-header">
                    <h4>Edit User/Admin</h4>
                </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.users.edit.save') }}">
                    <div class="row">
                        @csrf
                        @include('layouts.dashboard.widgits.forms.user.edit')
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="balance">User Balance</label>
                                <input type="number" class="form-control" value="{{ old('balance') ?? $user->balance }}" name="balance" id="balance" placeholder="">
                                
                                @error('balance')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="bonus">Add Bonus</label>
                                <input type="number" class="form-control" value="{{ old('bonus') ?? $user->bonus }}" name="bonus" id="bonus" placeholder="Bonus">
                                
                                @error('bonus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="users_id" value="{{ $user->id }}">
                        <div class="col-lg-12">
                            <div>
                                <h5 class="font-size-14 mb-3">Admin Checkboxes</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="admin" @if($user->admin) checked @endif id="admin">
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection