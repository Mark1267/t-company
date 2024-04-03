<style>
    .avatar-title{
        background-color: #FF5E15 !important;
    }
</style>
<div class="row">
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle font-size-20">
                                <i class="mdi mdi-arrow-up-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Active Investments</p>
                        <h5 class="mb-3">${{ $summary()->active_investments }}</h5>
{{--                         <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> <a class="text-decoration-underline float-end" href="#">Deposit</a></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow-up-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Total Investments</p>
                        <h5 class="mb-3">${{ $summary()->total_investments }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow--circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Pending Investments</p>
                        <h5 class="mb-3">${{ $summary()->pending_investments }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow-down-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Total Balance</p>
                        <h5 class="mb-3">${{ $summary()->total_balance }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow--circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Withdrawals</p>
                        <h5 class="mb-3">${{ $summary()->total_withdrawals }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow-down-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Pending Withdrawals</p>
                        <h5 class="mb-3">${{ $summary()->pending_withdrawals }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow--circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Users</p>
                        <h5 class="mb-3">{{ $summary()->total_users }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow--circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Admins</p>
                        <h5 class="mb-3">{{ $summary()->total_admins }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
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
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-white font-size-20">
                                <i class="mdi mdi-arrow--circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Tickets</p>
                        <h5 class="mb-3">{{ $summary()->total_tickets }}</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span></p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->