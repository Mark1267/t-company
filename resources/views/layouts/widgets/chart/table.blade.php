<!-- Feature Two Section Starts Here -->
<style>
  .chart-min::-webkit-scrollbar {
    width: 2px;
    background-color: #F5F5F5;
  }

  .chart-min::-webkit-scrollbar-thumb {
    background-color: #000000;
  }

  .chart-min::-webkit-scrollbar-thumb:hover {
    background-color: #555555;
  }

  .chart-min::-webkit-scrollbar-track {
    background-color: #F5F5F5;
  }

  .chart-min::-webkit-scrollbar-track-piece {
    background-color: #F5F5F5;
  }

  .chart-min::-webkit-scrollbar-corner {
    background-color: #F5F5F5;
  }

  .chart-min::-webkit-scrollbar-button {
    background-color: #F5F5F5;
  }

  .chart-min::-webkit-scrollbar-button:horizontal {
    height: 0.2em;
  }

  .chart-min::-webkit-scrollbar-button:vertical {
    width: 0.2em;
  }

  .chart-min::-webkit-scrollbar-button:decrement {
    background-color: #F5F5F5;
  }

  .chart-min::-webkit-scrollbar-button:increment {
    background-color: #F5F5F5;
  }
</style>
<section class="section-bg bg-white pt-3 pb-5">
  <div class="container">
    <div class="row">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="section__header text-center">
            <h2 class="section__header-title">Latest Crypto Prices</h2>
            {{-- <p>Our Insights & Articles</p> --}}
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-4">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/key-events/"
              rel="noopener" target="_blank"><span class="blue-text">Daily currency news</span></a> by TradingView</div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
            async>
            {
                    "feedMode": "market",
                    "market": "forex",
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "regular",
                    "width": "100%",
                    "height": 550,
                    "locale": "en"
                }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div> --}}
      <div class="col-lg-10 mx-auto text-center chart-min" style="overflow-x: scroll;">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container mx-auto">
          <div class="tradingview-widget-container__widget"></div>
          <div class="tradingview-widget-copyright"><a
              href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
              target="_blank"><span class="blue-text">Crypto markets</span></a> by TradingView</div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
            async>
            {
                            "width": '100%',
                            "height": 550,
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "dark",
                            "locale": "en"
                        }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </div>
  </div>
</section>