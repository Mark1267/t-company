@php
use App\Traits\TransactionTraits;
@endphp
<style>
    .titlep {
        background-color: rgb(1, 9, 32);
        color: white;
        height: max-content;
    }

    .titlep .transcation_id {
        flex: 1;
        align-self: center;
    }

    .titlep .details {
        flex: 2;
    }

    .titlep .transcation_id h2 {
        font-size: 15px;
    }

    .descrpition {}

    .info {
        width: 15px;
        text-align: center;
        padding: 3px;
        height: 15px;
    }

    .hefff * {
        height: 20px;
    }

    .thread p {
        margin: 0;
        padding-right: 1px
    }

    .bbt li {
        flex: 1;
    }

    .titlep p {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Compound Transaction</h4>
                <div class="table-responsive">
                    <table class="table table-centered table-striped table-active table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 60px;"></th>
                                <th scope="col">ID & Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Plan</th>
                                <th scope="col">Earnings</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time(Remaining)</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($investments() as $data)
                            <tr>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle bg-primary text-success"
                                            style="padding: 7px 10px;  margin-top: 10px !important;">
                                            {{ Str::substr($data->user->username, 0, 1) }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1 font-size-12">{{ $data->transaction_id }}</p>
                                    <h6 class="font-size-15 mb-0">{{ $data->user->username }}</h6>
                                </td>
                                <td style="white-space: nowrap">{{ date('j D M, Y', strtotime($data->date)) }}</td>
                                <td>{{ $data->amount }}</td>
                                <td style="white-space: nowrap">{{ $data->plan->name }} : <span class="text-success">{{
                                        $data->plan->rate }}%</span></td>

                                <td>
                                    $ {{ $data->earning }}
                                </td>
                                <td>
                                    @if ($data->status)
                                    <i class="mdi mdi-check text-primary me-1"></i> Completed
                                    @elseif(!$data->status && $data->continue)
                                    <i class="mdi mdi-triangle-outline text-warning blink_me me-1"></i> Waiting For
                                    Extension
                                    @else
                                    <i class="mdi mdi-reload text-info blink_me me-1"></i> Running
                                    @endif
                                </td>
                                <td>
                                    {{ $data->time_remaining }}
                                </td>
                                <td>
                                    @if ($data->status)
                                    <a href="{{ route('user.transaction.withdraw.new') }}"
                                        class="btn btn-outline-success btn-sm"><i class="mdi mdi-bank-minus"></i>
                                        Withdraw</a>
                                    @if (!$data->reinvest)
                                    <a href="{{ route('reinvest', ['transaction_id' => $data->transaction_id]) }}"
                                        class="btn btn-outline-primary{{ ($data->user->balance < $data->numAmount) ? ' disabled' : '' }} btn-sm">
                                        <i class="mdi mdi-reload me-2"></i>
                                        Re Invest
                                    </a>
                                    @endif
                                    @elseif(!$data->investment->status && $data->investment->paused)
                                    Investment Paused <a href="{{ route('user.contact.new') }}"
                                        class="btn btn-outline-info btn-sm">Our Support</a>
                                    @elseif($data->continue)
                                    <a href="{{ route('user.transaction.compound.deposit.extend', ['id' => $data->investment->id]) }}"
                                        class="btn btn-outline-info btn-sm">Extend</a>
                                    @else
                                    <a href="#" class="btn blink_me btn-disabled btn-outline-success btn-sm">Running</a>
                                    @endif
                                    @if($data->user->admin)
                                    <a href="{{ route('admin.compound.investment.pause', ['transaction_id' => $data->transaction_id]) }}"
                                        class="btn btn-outline-info btn-sm">{{ $data->investment->paused ? 'UnPause' :
                                        'Pause' }}</a>
                                    <a href="{{ route('admin.transaction.deposit.delete', ['transaction_id' => $data->transaction_id]) }}"
                                        class="btn btn-outline-danger btn-sm">Delete</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <div class="row bg-soft-secondary">
                                        <div class="col-md-12 d-flex titlep">
                                            <div class="transcation_id pt-1">
                                                <p>#{{ $data->transaction_id }}</p>
                                            </div>
                                            <div class="details child d-flex py-1 pr-2">
                                                <p class="time mx-1" style="align-self: center;">{{ $data->time_passed
                                                    }}</p>
                                                <p class="unknown-n mx-1 text-success" style="align-self: center;">N</p>
                                                <div class="descrpition mx-3 d-flex" style="align-self: center;">
                                                    <i class="fa fa-info-circle text-white"></i>
                                                    <p class="mx-1">{{ $data->currency->symbol }} {{ 90.73 *
                                                        $data->plan->rate }}</p>
                                                    <small class="mx-2">{{ $data->plan->title }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="btn-group">
                                                <button type="button" class="btn p-1 btn-success">FAN</button>
                                                <button type="button" class="btn p-1 btn-outline-success">{{
                                                    $data->fans->ave }}</button>
                                                <button type="button" class="btn p-1 btn-success">CORE</button>
                                                <button type="button" class="btn p-1 btn-outline-success">{{ $data->core
                                                    }}</button>
                                                <button type="button" class="btn p-1 btn-success">MEM</button>
                                                <button type="button" class="btn p-1 btn-outline-success">{{ $data->mem
                                                    }}</button>
                                                <button type="button" class="btn p-1 btn-success">PL</button>
                                                <button type="button" class="btn p-1 btn-outline-success">{{ $data->pl
                                                    }}</button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 py-1">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="row text-white hefff">
                                                        <div class="col-6 bg-dark text-white">
                                                            <p>{{ $data->plan->title }} v.37.6 100% A {{ rand(10,60) }}
                                                            </p>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <p class="text-warning">AUTOLYK0S2</p>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="info mx-1 rounded-circle d-inline-block"
                                                                style="width: 60px">
                                                                <i class="fa fa-info-circle text-white"></i>
                                                            </div>
                                                            <h4 class="mx-1 d-inline-block">{{ $data->currency->symbol
                                                                }}</h4>
                                                        </div>
                                                        <div class="col-3">
                                                            <p>{{ $data->currency->name }}</p>
                                                        </div>
                                                        <div class="col-3 text-end">
                                                            <p>{{ config('main.site.name') }}</p>
                                                        </div>
                                                        <div class="col-3 text-end">
                                                            <p>{{ $data->amount }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-white">
                                                    <div class="row">
                                                        @foreach ($data->fans as $fan)
                                                            <div style="width: 50px"
                                                                class="p-0 thread bg-soft-secondary ml-1 d-flex text-end flex-column">
                                                                <p class="tempreature">{{ rand(50,90) }}*</p>
                                                                <p class="rate bg-warning">{{ $fan }}%</p>
                                                                <p class="tempreature">{{ rand(110, 140) }}.{{ rand(0,9) }}
                                                                </p>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <ul class="d-flex bbt list-unstyled" style="font-size: 10px">
                                                <li><b class="text-white text-uppercase">Booted</b> {{
                                                    $data->time_passed }}</li>
                                                <li><b class="text-white text-uppercase">Miner uptime</b> {{
                                                    $data->time_passed }}</li>
                                                <li><b class="text-white text-uppercase">IP</b> {{ $data->ip }}</li>
                                                <li><b class="text-white text-uppercase">O</b> {{ $data->firstSerial }}
                                                </li>
                                                <li class="text-warning"><b class="text-uppercase">I</b> {{
                                                    $data->secoundSerial }}</li>
                                            </ul>
                                        </div>
                                    </div>
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