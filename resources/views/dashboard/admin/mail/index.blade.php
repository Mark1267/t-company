@extends('layouts.dashboard.app', ['title' => 'All Your mail Templates'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <h4 class="card-title mb-4">All Your mail Templates</h4>
                    </div>
                    <div class="col-xl-6 col-md-6 text-md-end">
                        <a href="{{ route('admin.mail.add') }}" class="btn btn-success waves-effect waves-light">Create New Template</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($templates as $key => $mail)
                                <tr>
                                    <td>
                                        <p class="mb-1 font-size-12">#{{ $key + 1 }}</p>
                                    </td>
                                    <td>{{ $mail->subject }}</td>
                                    <td>
                                        <a href="{{ route('admin.mail.view', ['template_id' => $mail->id]) }}" target="_blank" class="btn btn-outline-primary btn-sm me-1"><i class="mdi mdi-arrow-expand-all"></i> View</a>
                                        <a href="{{ route('admin.mail.edit', ['template_id' => $mail->id]) }}" class="btn btn-outline-info btn-sm me-1"><i class="mdi mdi-book-edit-outline"></i> Edit</a>
                                        <a href="{{ route('admin.mail.public.send', ['template_id' => $mail->id]) }}" class="btn btn-outline-success btn-sm me-1"><i class="mdi mdi-email-send-outline"></i> All</a>
                                        <a href="{{ route('admin.mail.private', ['template_id' => $mail->id]) }}" class="btn btn-outline-warning btn-sm me-1"><i class="mdi mdi-send-check-outline"></i> Private</a>
                                        <a href="{{ route('admin.mail.delete', ['template_id' => $mail->id]) }}" class="btn btn-outline-danger btn-sm me-1"><i class="mdi mdi-send-check-outline"></i> Delete</a>
                                    </td>
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