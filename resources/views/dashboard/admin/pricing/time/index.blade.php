@extends('layouts.dashboard.app', ['title' => 'All Plan Categories'])

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
    <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Plan Categories</h4>
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th data-priority="1">Suffix</th>
                                        <th data-priority="1">Hours</th>
                                        <th data-priority="1">Added By</th>
                                        <th data-priority="1">Action</th>
                                        <th data-priority="1">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($times as $key => $time)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $time->suffix }}</td>
                                            <td>{{ $time->hours }}</td>
                                            <td>{{ $time->user->username }}</td>
                                            <td>
                                                <a href="{{ route('admin.pricing.time.update', ['id' => $time->id]) }}" class="btn btn-sm btn-outline-info"><i class="mdi mdi-book-edit-outline"></i> Update</a>
                                                <a href="!#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target=".delete{{ $time->id }}"><i class="mdi mdi-delete"></i> Delete</a>
                                            </td>
                                            <td>{{ date('j D M, Y', strtotime($time->created_at)) }}</td>
                                        </tr>
                                        <!-- Deleting Modal -->
                                        <div class="modal fade bs-example-modal-center delete{{ $time->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete {{ $time->suffix }}'s data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="card mb-0">
                                                                    <div class="card-body text-center">
                                                                        <p>Are sure you want to delete {{ $time->suffix }}'s data?</p>
                                                                        <small class="text-danger">This time will be deleted.</small><br>
                                                                        <a href="{{ route('admin.pricing.time.delete', ['id' => $time->id]) }}" class="btn btn-danger btn-block">Yes</a>
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $times->links() }}
                </div>
            </div>
    </div>
</div>
@endsection

@section('srcipts')

    <!-- Required datatable js -->
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('assets/dashboard/') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    
        <script src="{{ asset('assets/dashboard/') }}/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
    
        <!-- Init js -->
        <script src="{{ asset('assets/dashboard/') }}/js/pages/table-responsive.init.js"></script>
        
@endsection