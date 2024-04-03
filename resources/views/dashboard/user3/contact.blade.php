@extends('layouts.dashboard.user3.app', ['title' => 'Contact Us'])
@section('css')

    <!-- DataTables -->
    <link href="{{ asset('assets/') }}/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/') }}/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    
    <link href="{{ asset('assets/') }}/dashboard/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/') }}/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

    <style>
        .blink_me {
        animation: blinker 1s linear infinite;
        }
        
        @keyframes blinker {
        50% {
        opacity: 0;
        }
    }
    </style>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h4 class="card-title mb-4">Latest Tickets</h4>
                    </div>
                    @include('layouts.dashboard.widgits.contact.new')
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
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                    {{ substr($ticket->subject, 0, 1) }}
                                                </span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-1 font-size-12">#{{ $ticket->ref }}</p>
                                        <h5 class="font-size-15 mb-0">{{ $ticket->user->username }}</h5>
                                    </td>
                                    <td>{{ date('j D M, Y', strtotime($ticket->created_at)) }}</td>
                                    <td>{{ $ticket->subject }}</td>
                                    <td>{!! ($ticket->read) ? '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Attendend' : '<i class="mdi mdi-checkbox-blank-circle blink_me text-warning me-1"></i> Pending' !!}
                                        
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center{{ $ticket->ref }}"><i class="mdi mdi-eye-check"></i> View</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-centerdel{{ $ticket->ref }}"><i class="mdi mdi-delete"></i> Delete</button>

                                    </td>
                                    <div class="modal fade bs-example-modal-center{{ $ticket->ref }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ticket #{{ $ticket->ref }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="card mb-0">
                                                                <div class="card-body">
                                                                    <div class="d-flex mb-4">
                                                                        <div class="flex-grow-1">
                                                                            <h4 class="font-size-16">{{ $ticket->user->username }}</h4>
                                                                            <p class="text-muted font-size-13">{{ $ticket->user->email }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="font-size-16">{{ $ticket->subject }}</h4>
                                                                    {!! $ticket->message !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade bs-example-modal-centerdel{{ $ticket->ref }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ticket #{{ $ticket->ref }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="card mb-0">
                                                                <div class="card-body text-center">
                                                                    <p>Are you sure you want to delete Ticket-#{{ $ticket->ref }}?</p>
                                                                    <a href="{{ route('user.contact.delete', ['ticket_id' => $ticket->id]) }}" class="btn btn-danger">Yes</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
    0 < $("#emaileditor2").length &&
        tinymce.init({
            selector: "#emaileditor2",
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