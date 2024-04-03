<!--Call Back Form-->
<section class="parallax_one padding padding-bottom-half" style="background: url(https://www.minersmax.net/images/map_bg.png) center center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="overflow-x: scroll">
                <!-- TradingView Widget BEGIN -->
                {{-- <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a
                            href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                            target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView
                    </div>
                    <script type="text/javascript"
                        src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                            "width": "100%",
                            "height": "600",
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "light",
                            "locale": "en",
                            "isTransparent": false
                        }
                    </script>
                </div> --}}
                <!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
    {
    "colorTheme": "light",
    "dateRange": "1D",
    "showChart": true,
    "locale": "en",
    "largeChartUrl": "",
    "isTransparent": false,
    "showSymbolLogo": true,
    "showFloatingTooltip": false,
    "width": "350",
    "height": "660",
    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
    "gridLineColor": "rgba(240, 243, 250, 0)",
    "scaleFontColor": "rgba(106, 109, 120, 1)",
    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
    "tabs": [
      {
        "title": "Crypto",
        "symbols": [
          {
            "s": "BITSTAMP:BTCUSD",
            "d": "Bitcoin"
          },
          {
            "s": "BINANCE:ETHUSDT",
            "d": "ETH"
          },
          {
            "s": "BINANCE:XRPUSDT",
            "d": "TETHER"
          },
          {
            "s": "BINANCE:SOLUSDT"
          },
          {
            "s": "BINANCE:DOGEUSDT",
            "d": "DOGE"
          }
        ]
      }
    ]
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
            </div>
            <div class="col-sm-6">
                <div class="bg_call border_radius wow fadeInRight">
                    <h2 class="bottom10 text-center">Kindly request a <span class="blue_t">Call Back</span></h2>
                    <p class="text-center bottom20">Should you have any general inquiries or need to get in touch, please complete the form below. We will promptly reach out to you on the same business day.</p>
                    {{-- <form class="callus">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-sm-6 form-group">
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-sm-12 form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                                <button type="submit" class="btn-green top10 border_radius text-uppercase">Submit</button>
                            </div>
                        </div>
                    </form> --}}
                    
                <form class="callus padding-bottom" method="POST" action="{{ route('contact.save') }}">

                    <div class="form-group">
                        <div id="result"></div>
                    </div>
                    <div class="form-group">
                        <label>Your Full Name * <span class="text-danger">@error('name'){{ $message
                                }}@enderror</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" required name="name" id="name"
                                value="{{ old('name') }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your Email* <span class="text-danger">@error('email'){{ $message }}@enderror</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" required name="email" id="email"
                                value="{{ old('email') }}">
                            <span class="input-group-addon"><i class="icon-envelope2"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subject* <span class="text-danger">@error('subject'){{ $message }}@enderror</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" required name="subject" id="subject"
                                value="{{ old('subject') }}">
                            <span class="input-group-addon"><i class="fa fa-pen-alt"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message * <span class="text-danger">@error('message'){{ $message }}@enderror</span></label>
                        <div class="input-group">
                            <textarea class="form-control" name="message"
                                id="message">{{ old('message') }}</textarea>
                            <span class="input-group-addon"><i class=" icon-comments"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn-green border_radius" name="fullOpenContact">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Call Form ends-->