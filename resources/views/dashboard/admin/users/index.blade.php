@extends('layouts.dashboard.app', ['title' => 'All your Clients'])

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
@section('content')

@section('content')
    <div class="row">
        <div class="col-12 p-0">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All your Clients</h4>
<a href="{{ route('admin.transaction.bonus.add') }}" class="btn btn-success">Add Bonus</a>
                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>User Name</th>
                                <th>Date Joined</th>
                                <th>Balance</th>
                                <th>Email</th>
                                <th>Deposits</th>
                                <th>Date Joined</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle bg-soft-primary text-success">
                                                {{ substr($user->username, 0,1) }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ date('j D M, Y', strtotime($user->created_at)) }}</td>
                                    <td>${{ $user->balance }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        ${{ $user->totalDeposits }}
                                    </td>
                                    <td> {{ date('d-M-Y', strtotime($user->created_at)) }} </td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', ['users_id' => $user->id]) }}" class="btn btn-outline-success btn-sm"><i class="mdi mdi-book-edit-outline"></i> Edit</a>
                                        <a href="{{ route('admin.users.view', ['user_id' => $user->id]) }}" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-view-carousel"></i> View</a>
                                        @if(empty($user->email_verified_at))
                                            <a href="{{ route('admin.users.verify', ['user_id' => $user->id]) }}" class="btn btn-outline-primary btn-sm">Verify</a>
                                        @endif
                                        {{-- @else
                                                    <a onclick="verify('{{ $code['email']; ?>', ''phone']; ?>')" class="btn btn-outline-primary btn-sm 'phone']; ?>">Verify</a>
                                                @endif --}}
                                        <a href="!#" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target=".delete{{ $user->id }}"><i class="mdi mdi-delete"></i> Delete</a>
                                    </td>
                                </tr>
                                    <!-- Deleting Modal -->
                                            <div class="modal fade bs-example-modal-center delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete {{ $user->username }}'s account</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="card mb-0">
                                                                        <div class="card-body text-center">
                                                                            <p>Are sure you want to delete {{ $user->username }}'s account?</p>
                                                                            <a href="{{ route('admin.users.delete', ['users_id' => $user->id]) }}" class="btn btn-danger">Yes</a>
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
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
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
    <script>
        $('#datatable').DataTable({
        order: [[6, 'desc']],
    });
    </script>
@endsection
