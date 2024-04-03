@extends('layouts.dashboard.user3.app', ['title' => $title])

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
                                        <th data-priority="1">Type</th>
                                        @can('admin')
                                            <th data-priority="1">User Name</th>
                                        @endcan
                                        <th data-priority="1">ID</th>
                                        <th data-priority="1">Currency</th>
                                        <th data-priority="1">Amount</th>
                                        <th data-priority="1">Wallet</th>
                                        <th data-priority="1">Status</th>
                                        <th data-priority="1">Action</th>
                                        <th data-priority="1">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $key => $transaction)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ ($transaction->nature) ? 'Deposit' : 'Withdrawal' }}</td>
                                            @can('admin')
                                                <td>{{ $transaction->user->username }}</td>
                                            @endcan
                                            <td>{{ $transaction->transaction_id }}</td>
                                            <td>{{ $transaction->currency->name . '(' . $transaction->currency->symbol . ')' }}</td>
                                            <td>${{ $transaction->amount }}</td>
                                            <td>{{ ($transaction->nature) ? $transaction->company_address : $transaction->client_address }}</td>
{{--                                             <td>
                                                {!! ($transaction->status) ? '<i class="mdi mdi-check text-primary me-1"></i> Completed' : '<a href="' . Auth::user()->admin ? route('admin.transaction.deposit.details') : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) . '" class="text-info text-underline blink_me"><i class="mdi mdi-reload text-info blink_me me-1"></i> Pending</a>' !!}
                                            </td> --}}
                                            <td>
                                                @if($transaction->nature)
                                                    @if($transaction->status)
                                                        <i class="mdi mdi-check text-primary me-1"></i> Completed
                                                    @else
                                                        <a href="{{ Auth::user()->admin ? route('admin.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) }}" class="text-info text-underline blink_me"><i class="mdi mdi-reload text-info blink_me me-1"></i> Pending</a>
                                                    @endif
                                                @else
                                                    {!! ($transaction->status) ? '<i class="mdi mdi-check text-primary me-1"></i> Completed' : '<a href="#" class="text-info text-underline blink_me"><i class="mdi mdi-reload text-info blink_me me-1"></i> Pending</a>' !!}
                                                @endif
                                            </td>
                                            <td>
                                                @can('admin')
                                                    @if($transaction->status)
                                                        {{-- <td><a href="{{ route('admin.investment.reverse', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-warning">Reverse</a></td> --}}                                                @else
                                                        
                                                            <a href="{{ ($transaction->nature) ? route('admin.investment.start', ['transaction_id' => $transaction->transaction_id]) : route('admin.transaction.withdraw.accept', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-success">Accept</a>
                                                            <a href="{{ ($transaction->nature) ? route('admin.transaction.deposit.update', ['transaction_id' => $transaction->transaction_id]) : route('admin.transaction.withdraw.update', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-info">Edit</a>
                                                        
                                                    @endif
                                                    <a href="{{ route('admin.transaction.deposit.delete', ['transaction_id' => $transaction->transaction_id]) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                                                @endcan
                                                
                                                @if($transaction->nature)
                                                    <a href="{{ Auth::user()->admin ? route('admin.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) : route('user.transaction.deposit.details', ['transction_id' => $transaction->transaction_id]) }}" class="text-info text-underline btn-outline-info"><i class="mdi mdi-eye text-info me-1"></i> View</a>
                                                @endif
                                            </td>
                                            <td style="white-space: nowrap">{{ date('j D M, Y', strtotime($transaction->created_at)) }}</td>
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