@extends('layouts.dashboard.user3.app', ['title' => $user->username ])
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('main.site.name') }}</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <x-User.Overview.Account-Summary />

    <x-User.Overview.Investment-Table :tableData="$transactions" />

    {{-- <x-Dashboard.Widgets.Compound.Investment-Table :data="$compounds" /> --}}

    
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card">
                <div class="card-body">

                    <div style="height: 440px;">
                        <!-- <div id="mixed-chart" class="apex-charts" dir="ltr"></div> -->
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                                {
                                    "width": "100%",
                                    "height": "100%",
                                    "currencies": [
                                        "EUR",
                                        "USD",
                                        "JPY",
                                        "GBP",
                                        "CHF",
                                        "AUD",
                                        "CAD",
                                        "NZD",
                                        "CNY"
                                    ],
                                    "isTransparent": false,
                                    "colorTheme": "dark",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <!-- end card-body -->

                {{-- <x-User.Overview.Coin-Price /> --}}

            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div style="height: 530px">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                    "colorTheme": "dark",
                                    "dateRange": "12M",
                                    "showChart": true,
                                    "locale": "en",
                                    "width": "100%",
                                    "height": "100%",
                                    "largeChartUrl": "",
                                    "isTransparent": false,
                                    "showSymbolLogo": true,
                                    "showFloatingTooltip": false,
                                    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                    "gridLineColor": "rgba(240, 243, 250, 0)",
                                    "scaleFontColor": "rgba(120, 123, 134, 1)",
                                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                    "tabs": [{
                                        "title": "Indices",
                                        "symbols": [{
                                            "s": "COINBASE:BTCUSD",
                                            "d": "BTC/USD"
                                        }, {
                                            "s": "BITSTAMP:ETHUSD",
                                            "d": "ETH/USD"
                                        }, {
                                            "s": "OKEX:XPRUSDT",
                                            "d": "XPR/USDT"
                                        }, {
                                            "s": "XETR:DAXU",
                                            "d": "DAX/USD"
                                        }, {
                                            "s": "BITFINEX:DOGEUSD",
                                            "d": "DOGE/USD"
                                        }, {
                                            "s": "BINANCE:SHIBBUSD",
                                            "d": "SHIB/BUSD"
                                        }, {
                                            "s": "CRYPTOCAP:BNB",
                                            "d": "BNB/USD"
                                        }],
                                        "originalTitle": "Indices"
                                    }, {
                                        "title": "Futures",
                                        "symbols": [{
                                            "s": "CME_MINI:ES1!",
                                            "d": "S&P 500"
                                        }, {
                                            "s": "CME:6E1!",
                                            "d": "Euro"
                                        }, {
                                            "s": "COMEX:GC1!",
                                            "d": "Gold"
                                        }, {
                                            "s": "NYMEX:CL1!",
                                            "d": "Crude Oil"
                                        }, {
                                            "s": "NYMEX:NG1!",
                                            "d": "Natural Gas"
                                        }, {
                                            "s": "CBOT:ZC1!",
                                            "d": "Corn"
                                        }],
                                        "originalTitle": "Futures"
                                    }, {
                                        "title": "Bonds",
                                        "symbols": [{
                                            "s": "CME:GE1!",
                                            "d": "Eurodollar"
                                        }, {
                                            "s": "CBOT:ZB1!",
                                            "d": "T-Bond"
                                        }, {
                                            "s": "CBOT:UB1!",
                                            "d": "Ultra T-Bond"
                                        }, {
                                            "s": "EUREX:FGBL1!",
                                            "d": "Euro Bund"
                                        }, {
                                            "s": "EUREX:FBTP1!",
                                            "d": "Euro BTP"
                                        }, {
                                            "s": "EUREX:FGBM1!",
                                            "d": "Euro BOBL"
                                        }],
                                        "originalTitle": "Bonds"
                                    }, {
                                        "title": "Forex",
                                        "symbols": [{
                                            "s": "FX:EURUSD"
                                        }, {
                                            "s": "FX:GBPUSD"
                                        }, {
                                            "s": "FX:USDJPY"
                                        }, {
                                            "s": "FX:USDCHF"
                                        }, {
                                            "s": "FX:AUDUSD"
                                        }, {
                                            "s": "FX:USDCAD"
                                        }],
                                        "originalTitle": "Forex"
                                    }]
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
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
