@extends('layouts.dashboard.app', ['title' => 'All Categories'])

@section('content')
    
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">All Categories</h4>

            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Added By</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $key => $category)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ strip_tags($category->body) }}</td>
                            <td>{{ $category->user->full_name }}</td>
                            <td>{{ date('M D j, Y H:i:s', strtotime($category->created_at)) }}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-outline-success btn-sm">Edit</a>
                                <a href="{{ route('admin.categories.delete', ['id' => $category->id]) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <tr><td>{{ $counter}}</td>
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

<div class="col-lg-12 text-center">{{ $categories->links() }}</div>

@endsection