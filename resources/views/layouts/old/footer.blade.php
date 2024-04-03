<!--footer section start-->
<footer class="footer-1 ptb-60 gradient-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand mb-2 bg-white rounded">
          <img src="{{ asset(config('settings.site.logo.full')) }}" alt="logo" class="img-fluid">
        </a>
        <br>
        <p>here is no other worldwide financial market that can guarantee a daily ability to
          generate constant profit with the large price swings of Bitcoin. Proposed modalities for strengthening
          cooperation will be accepted by anyone who uses cryptocurrency and knows about its fantastic prospects.</p>

        <ul>
          <li>
            <a>ADDRESS: {{ config('settings.site.address.full') }}.</a>
          </li>
          <li>
            <a>EMAIL: {{ config('settings.site.email.support') }}</a>
          </li>
        </ul>


      </div>
      <div class="col-md-12 col-lg-8">
        <div class="row mt-0">
          <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
            <h6 class="font-weight-normal">QUICK LINKS</h6>
            <ul>
              <li>
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li>
                <a href="{{ route('about') }}">About</a>
              </li>
              <li>
                <a href="{{ route('faq') }}">Faq</a>
              </li>
              <li>
                <a href="{{ route('home') }}">Rules</a>
              </li>
              <li>
                <a href="{{ route('contact') }}">Contact</a>
              </li>
            </ul>
          </div>
          {{-- <div class="col-sm-6 col-md-3 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
            <h6 class="font-weight-normal">Certificate</h6>
            <ul>
              <li>
                <a href="assets/img/certifi.png" class="navbar-brand mb-2" target="_blank">
                  <img src="assets/img/certifi.png" alt="certifi" class="img-fluid">
                </a>
              </li>
            </ul>
          </div> --}}
          <div class="col-sm-6 col-md-6 col-lg-6 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
            <h6 class="font-weight-normal">Cryptocurrency Prices</h6>

            <script src="../widgets.coingecko.com/coingecko-coin-list-widget.js"></script>
            <coingecko-coin-list-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" locale="en">
            </coingecko-coin-list-widget>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of container-->
</footer>