@extends('layouts.dashboard.app', ['title' => 'All Team Members'])

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title mb-4">All Team Members</h4>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <a href="{{ route('admin.settings.site.teams.add') }}" class="btn btn-success btn-block">Add Team Members</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 60px;"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Facebook</th>
                                    <th scope="col">Instagram</th>
                                    <th scope="col">Linkdin</th>
                                    <th scope="col">Twitter</th>
                                    <th scope="col">Google</th>
                                    <th scope="col">Added By</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $key => $team)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                    {{ $key++ }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $team->name }}
                                        </td>
                                        <td>{{ $team->rank }}</td>
                                        <td>{{ $team->facebook }}</td>
                                        <td>{{ $team->instagram }}</td>
                                        <td>{{ $team->linkdin }}</td>
                                        <td>{{ $team->twitter }}</td>
                                        <td>{{ $team->google }}</td>
                                        <td>{{ $team->user->full_name }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"  href="{{ route('admin.settings.site.teams.update', ['id' => $team->id ]) }}">Update</a>
                                            <a class="btn btn-info btn-sm" target="_blank" href="{{ route('teams') }}">View</a>
                                            <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-centerdel{{ $team->id }}">Delete</button>
                                        </td>
                                        <div class="modal fade bs-example-modal-centerdel{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Team Member {{ $team->name }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="card mb-0">
                                                                    <div class="card-body text-center">
                                                                        <p>Are sure you want to delete this team member {{ $team->name }}?</p>
                                                                        <a href="{{ route('admin.settings.site.teams.delete', ['id' => $team->id]) }}" class="btn btn-danger">Yes</a>
                                                                    </div>
                                                                </div>
                                                                <!-- end card -->
                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection