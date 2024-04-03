@extends('layouts.dashboard.app', ['title' => $title])

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
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">{{ $title }}</h4>

                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        @can('admin')
                                            <th data-priority="1">User Name</th>
                                        @endcan
                                        <th data-priority="1">Currency</th>
                                        <th data-priority="1">Amount</th>
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Wallet</th>
                                        <th data-priority="1">Status</th>
                                        <th data-priority="1">Action</th>
                                        <th data-priority="1">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $key => $transaction)
                                    {{-- @dd($transaction) --}}
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            @can('admin')
                                                <td>{{ $transaction->user->username }}</td>
                                            @endcan
                                            <td>{{ $transaction->currency->name . '(' . $transaction->currency->symbol . ')' }}</td>
                                            <td>${{ $transaction->amount }}</td>
                                            <td>{{ $transaction->transaction_id }}</td>
                                            <td>{{ $transaction->company_address }}</td>
{{--                                             <td>
                                                {!! ($transaction->status) ? '<i class="mdi mdi-check text-primary me-1"></i> Completed' : '<a href="' . Auth::user()->admin ? route('admin.transaction.deposit.details') : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) . '" class="text-info text-underline blink_me"><i class="mdi mdi-reload text-info blink_me me-1"></i> Pending</a>' !!}
                                            </td> --}}
                                            <td>
                                                @if($transaction->status)
                                                    <i class="mdi mdi-check text-primary me-1"></i> Completed
                                                @else
                                                    <a href="{{ Auth::user()->admin ? route('admin.transaction.compound.details', ['transction_id' => $transaction->transaction_id]) : route('user.transaction.compound.deposit.details', ['transction_id' => $transaction->transaction_id]) }}" class="text-info text-underline blink_me"><i class="mdi mdi-reload text-info blink_me me-1"></i> Pending</a>
                                                @endif
                                            </td>
                                            <td>
                                                @can('admin')
                                                    {{-- @if($transaction->status)
                                                        <td><a href="{{ route('admin.investment.reverse', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-warning">Reverse</a></td>
                                                    @else --}}
                                                        @if($extenstion)
                                                        @if(!$transaction->status)
                                                            <a href="{{ route('admin.compound.investment.rollover', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-success">Accept</a>
                                                            @endif
                                                        @else
                                                            @if(!$transaction->status)
                                                                <a href="{{ route('admin.compound.investment.start', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-success">Accept</a>
                                                            @endif
                                                            <a href="{{ route('admin.transaction.compound.type.extension', ['extension_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-warning">Extensions {{ $transaction->how_many_extensions }}</a>
                                                        @endif
                                                    {{-- @endif --}}
                                                    <a href="{{ route('admin.transaction.compound.update', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-info">Edit</a>    
                                                    <a href="{{ route('admin.transaction.compound.delete', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                                                @endcan
                                                
                                                    <a href="{{ Auth::user()->admin ? route('admin.transaction.compound.details', ['transction_id' => $transaction->transaction_id]) : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) }}" class="text-info text-underline btn-outline-info"><i class="mdi mdi-eye text-info me-1"></i> View</a>
                                                
                                            </td>
                                            <td>{{ date('j D M, Y', strtotime($transaction->created_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{ $transactions->links() }}
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
        
@endsection