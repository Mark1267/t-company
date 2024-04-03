@extends('layouts.dashboard.app', ['title' => 'All Client Tickets'])
@section('css')
<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title mb-4">Latest Tickets</h4>
                    </div>
                    @include('layouts.dashboard.widgits.contact.admin_new')
                </div>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 60px;"></th>
                                <th scope="col">ID & Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $key => $ticket)
                                <tr>
                                    <td>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                {{ $key++ }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-size-12">#{{ $ticket->ref }}</p>
                                        <h5 class="font-size-15 mb-0">{{ $ticket->user->full_name }}</h5>
                                    </td>
                                    <td>{{ date('j D M, Y H:i:s', strtotime($ticket->created_at)) }}</td>
                                    <td>{{ $ticket->subject }}</td>
                                    <td>{!! ($ticket->read) ? '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Attendend' : '<i class="mdi mdi-checkbox-blank-circle blink_me text-warning me-1"></i> Pending' !!}
                                    <td>
                                        <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $ticket->ref }}">View</button>
                                        <a class="btn btn-primary btn-sm"  href="{{ route('admin.contact.reply', ['ticket_ref' => $ticket->ref ]) }}">Reply</a>
                                        <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-centerdel{{ $ticket->ref }}">Delete</button>
                                    </td>
                                    @include('layouts.dashboard.widgits.contact.admin_contact_modal')
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

@section('srcipts')

    <!--tinymce js-->
    <script src="{{ asset('assets/') }}/dashboard/libs/tinymce/tinymce.min.js"></script>

    <script>
        $(document).ready(function() {
    0 < $("#email-editor ").length &&
        tinymce.init({
            selector: "textarea#email-editor",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                { title: "Red text", inline: "span", styles: { color: "#ff0000" } },
                { title: "Red header", block: "h1", styles: { color: "#ff0000" } },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],
        });
});

$(document).ready(function() {
    0 < $("#email-editor2").length &&
        tinymce.init({
            selector: "textarea#email-editor2",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                { title: "Red text", inline: "span", styles: { color: "#ff0000" } },
                { title: "Red header", block: "h1", styles: { color: "#ff0000" } },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],
        });
});
    </script>

@endsection