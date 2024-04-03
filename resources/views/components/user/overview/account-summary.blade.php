<div class="row">
    <style>
        .avatar-sm .avatar-title i{
            color: white !important;
        }
    </style>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle text-primary font-size-20">
                                <i class="mdi mdi-bank-transfer"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden text-dark">
                        <p class="mb-1">Active Investments</p>
                        <h5 class="mb-3">${{ $summary()->active_investments }}</h5>
{{--                         <p class="text-dark mb-0"><span class="text-dark me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> <a class="text-decoration-underline text-white pull-right" href="{{ route('user.transaction.deposit.new') }}">Deposit</a></p>
 --}}                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle text-primary font-size-20">
                                <i class="mdi mdi-bank-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 text-dark overflow-hidden">
                        <p class="mb-1">Total Investments</p>
                        <h5 class="mb-3">${{ $summary()->total_investments }}</h5>
                        {{-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p> --}}
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle text-primary font-size-20">
                                <i class="mdi mdi-basket-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 text-dark overflow-hidden">
                        <p class="mb-1">Pending Deposits</p>
                        <h5 class="mb-3">${{ $summary()->pending_investments }}</h5>
                        {{-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p> --}}
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle text-primary font-size-20">
                                <i class="mdi mdi-basket-outline"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 text-dark overflow-hidden">
                        <p class="mb-1">Total Balance</p>
                        <h5 class="mb-3">${{ Auth::user()->balance }}</h5>
                        {{-- @if(Auth::user()->balance > 0) --}}
                            {{-- <a href="{{ route('user.transaction.deposit.invest.balance') }}" class="text-white blink_me badge bg-danger text-underline">Invest Now!</a> --}}
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle text-primary font-size-20">
                                <i class="mdi mdi-bank-minus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 text-dark overflow-hidden">
                        <p class="mb-1">Withdrawals</p>
                        <h5 class="mb-3">${{ $summary()->total_withdrawals }}</h5>
                        {{-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p> --}}
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle text-primary font-size-20">
                                <i class="mdi mdi-bank-transfer-out"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 text-dark overflow-hidden">
                        <p class="mb-1">Pending Withdrawals</p>
                        <h5 class="mb-3">${{ $summary()->pending_withdrawals }}</h5>
                        {{-- <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p> --}}
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    
    {{-- <div class="col-xl-4 mx-auto col-sm-6">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3 align-self-center">
                            <div class="avatar-sm">
                                <div class="avatar-title rounded-circle text-primary font-size-20">
                                    <i class="mdi mdi-gift"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <p class="mb-1">Bonus</p>
                            <h5 class="mb-3">${{ Auth::user()->bonus }}</h5>
                            <p class="text-truncate mb-0"><span class="text-success me-2"> 0.00 <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span>
                            <a href="{{ route('user.transaction.deposit.invest.bonus') }}" class="text-white badge bg-danger text-underline">Invest Now!</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    --}}
</div>
<!-- end row -->