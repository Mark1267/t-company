<section class="section section--blue">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12 offset-2 mx-auto col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="section__title mb-3">Live Statistics</h2>
                    <p class="section__text">Here is the log of the most recent transactions including withdraw and deposit made by our users.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center padding-bottom-half padding-top-half">
            <div class="col-md-6 mx-auto col-md-offset-4 col-lg-offset-3 col-lg-6">
                <div class="single-blog-article border rounded d-block p-4 mt-4" href="#">
                    <div class="latest-row latest-row1">

                        <ul>
                            <li class="title">
                                <h3>Latest deposit</h3>
                            </li>
                        </ul>
                        @foreach ($deposits() as $deposit)
                            <div class="row my-1">
                                <div class="col-4">
                                    {{ $deposit['name'] }}
                                </div>
                                <div class="col-4">
                                    ${{ number_format($deposit['amount']) }}
                                </div>
                                <div class="col-4">
                                    <i><img src="https://bulkwavecapital.com/assets/open/images/1000.gif"></i>
                                </div>
                            </div>
                        @endforeach
                        {{-- <table class="table table-responsive table-striped">
                            @foreach ($deposits() as $deposit)
                                <tr>
                                <td>{{ $deposit['name'] }}</td>
                                <td>${{ number_format($deposit['amount']) }}</td>
                                <td><i><img src="https://bulkwavecapital.com/assets/open/images/1000.gif"></i></td>
                                </tr>
                            @endforeach
                        </table> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-blog-article border rounded d-block p-4 mt-4" href="#">
                    <div class="latest-row latest-row3">

                        <ul>
                            <li class="title">
                                <h3>Latest withdrawals</h3>
                            </li>
                        </ul>
                        @foreach ($withdrawals() as $deposit)
                            <div class="row my-1">
                                <div class="col-4">
                                    {{ $deposit['name'] }}
                                </div>
                                <div class="col-4">
                                    ${{ number_format($deposit['amount']) }}
                                </div>
                                <div class="col-4">
                                    <i><img src="https://bulkwavecapital.com/assets/open/images/1000.gif"></i>
                                </div>
                            </div>
                        @endforeach
                        {{-- <table class="table table-responsive">
                            @foreach ($withdrawals() as $deposit)
                                <tr>
                                    <td>{{ $deposit['name'] }}</td>
                                    <td>${{ number_format($deposit['amount']) }}</td>
                                    <td><i><img src="https://bulkwavecapital.com/assets/open/images/1000.gif"></i></td>
                                </tr>
                            @endforeach
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>