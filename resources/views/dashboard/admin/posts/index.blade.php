@extends('layouts.dashboard.app', ['title' => 'All your Posts'])

@section('content')
    
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">All your Posts</h4>

            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Added By</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $key => $post)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->sub_title }}</td>
                            <td>{{ $post->category->title }}</td>
                            <td>{{ $post->user->full_name }}</td>
                            <td>{{ date('M D j, Y H:i:s', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-outline-success btn-sm">Edit</a>
                                <a target="blank" href="{{ route('news.signle', ['id' => $post->id]) }}" class="btn btn-outline-info btn-sm">View</a>
                                <a href="{{ route('admin.posts.delete', ['id' => $post->id]) }}" class="btn btn-outline-danger btn-sm">Delete</a>
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

<div class="col-lg-12 text-center">{{ $posts->links() }}</div>

@endsection