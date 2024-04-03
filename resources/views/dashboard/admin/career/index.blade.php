@extends('layouts.dashboard.app', ['title' => 'All Career Jobs'])

@section('content')
    
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">All Career Jobs</h4>

            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Min</th>
                            <th scope="col">Max</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Added By</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($careeries as $key => $career)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $career->title }}</td>
                            <td>{{ $career->mode }}</td>
                            <td>${{ $career->min }}</td>
                            <td>${{ $career->max }}</td>
                            <td>${{ $career->fee }}</td>
                            <td>{{ $career->user->username }}</td>
                            <td>{{ date('M D j, Y H:i:s', strtotime($career->created_at)) }}</td>
                            <td>
                                <a href="{{ route('career.all') }}" class="btn btn-outline-info btn-sm">View</a>
                                <a href="{{ route('admin.career.update', ['id' => $career->id]) }}" class="btn btn-outline-success btn-sm">Edit</a>
                                <a href="{{ route('admin.career.delete', ['id' => $career->id]) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td><span class="text-danger">Nothing to display</span></td>
                                <td><span class="text-danger">Nothing to display</span></td>
                                <td><span class="text-danger">Nothing to display</span></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end card-body -->
    </div>
    <!-- end card -->
</div>
<!-- end col -->

<div class="col-lg-12 text-center">{{ $careeries->links() }}</div>

@endsection