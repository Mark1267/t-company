@extends('layouts.dashboard.app', ['title' => 'All Reviews'])

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title mb-4">All Reviews</h4>
                        </div>
                        <div class="col-md-4 mx-auto">
                            <a href="{{ route('admin.settings.site.reviews.add') }}" class="btn btn-success btn-block">Add Reviews</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 60px;"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Review</th>
                                    <th scope="col">Stars</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Added By</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $key => $review)
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                    {{ $key+1 }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $review->name }}
                                        </td>
                                        <td style="white-space: nowrap"><p>{{ $review->review }}</p></td>
                                        <td>
                                            @for ($x=0;$x<$review->stars; $x++)
                                                <img src="{{ asset('img/star.png') }}" width="17px" class="img-fluid" alt="">
                                            @endfor
                                        </td>
                                        <td>{{ $review->rank }}</td>
                                        <td>{{ $review->user->full_name }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"  href="{{ route('admin.settings.site.reviews.update', ['id' => $review->id ]) }}">Update</a>
                                            <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-centerdel{{ $review->id }}">Delete</button>
                                        </td>
                                        <div class="modal fade bs-example-modal-centerdel{{ $review->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Review by {{ $review->name }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="card mb-0">
                                                                    <div class="card-body text-center">
                                                                        <p>Are sure you want to delete this review by {{ $review->name }}?</p>
                                                                        <a href="{{ route('admin.settings.site.reviews.delete', ['id' => $review->id]) }}" class="btn btn-danger">Yes</a>
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