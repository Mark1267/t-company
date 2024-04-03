<section class="section section--border-top">
  <div class="container">
    <div class="row">
      <!-- section title -->
      <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <h2 class="section__title">Popular currencies</h2>
        <p class="section__text">We focuses its mining efforts on a diverse range of popular cryptocurrencies, ensuring a strategic approach to maximize returns for our miners.</p>
      </div>
      <!-- end section title -->
    </div>

    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--up">BITCOIN PRICE</span>
          <span class="popular__price">${{ $coin()[0] }} USD (+1.3%)</span>
          {{-- <span class="popular__cap">Cap.: $14562176.32</span> --}}
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--up">24 VOLUME</span>
          <span class="popular__price">{{ $coin()[2] }} BTC</span>
          {{-- <span class="popular__cap">Cap.: $71497612.98</span> --}}
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--down">PRICE RATE</span>
          <span class="popular__price">{{ $coin()[1] }}%</span>
          {{-- <span class="popular__cap">Cap.: $14562176.32</span> --}}
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--up">ACTIVE TRADES</span>
          <span class="popular__price">${{ $coin()[3] }} USD</span>
          {{-- <span class="popular__cap">Cap.: $23562176.24</span> --}}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--up">ETHEREUM PRICE</span>
          <span class="popular__price">${{ $coinEth()[0] }} USD (+1.3%)</span>
          {{-- <span class="popular__cap">Cap.: $14562176.32</span> --}}
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--up">24 VOLUME</span>
          <span class="popular__price">{{ $coinEth()[2] }} ETH</span>
          {{-- <span class="popular__cap">Cap.: $71497612.98</span> --}}
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--down">PRICE RATE</span>
          <span class="popular__price">{{ $coinEth()[1] }}%</span>
          {{-- <span class="popular__cap">Cap.: $14562176.32</span> --}}
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="popular">
          <span class="popular__name popular__name--up">ACTIVE TRADES</span>
          <span class="popular__price">${{ $coinEth()[3] }} USD</span>
          {{-- <span class="popular__cap">Cap.: $23562176.24</span> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<!-- cureency section start -->
      {{-- <div class="cureency-section py-5">
        <div class="container">
          <div class="row mb-none-30">
            <div class="col-lg-3 col-sm-6 cureency-item mb-30">
              <div class="cureency-card text-center">
                <h6 class="cureency-card__title text-white">BITCOIN PRICE</h6>
                <span class="section__title">{{ $coin()[0] }} USD</span>
              </div><!-- cureency-card end -->
            </div><!-- cureency-item end -->
            <div class="col-lg-3 col-sm-6 cureency-item mb-30">
              <div class="cureency-card text-center">
                <h6 class="cureency-card__title text-white">24 VOLUME</h6>
                <span class="section__title">{{ $coin()[2] }} BTC</span>
              </div><!-- cureency-card end -->
            </div><!-- cureency-item end -->
            <div class="col-lg-3 col-sm-6 cureency-item mb-30">
              <div class="cureency-card text-center">
                <h6 class="cureency-card__title text-white">BITCOIN PRICE RATE</h6>
                <span class="section__title">{{ $coin()[1] }}%</span>
              </div><!-- cureency-card end -->
            </div><!-- cureency-item end -->
            <div class="col-lg-3 col-sm-6 cureency-item mb-30">
              <div class="cureency-card text-center">
                <h6 class="cureency-card__title text-white">ACTIVE TRADES</h6>
                <span class="section__title">{{ $coin()[3] }} USD</span>
              </div><!-- cureency-card end -->
            </div><!-- cureency-item end -->
          </div>
        </div>
      </div> --}}
      <!-- cureency section end  -->

      {{-- <!-- popular -->
	<section class="section section--border-top">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
					<h2 class="section__title">Popular currencies</h2>
					<p class="section__text">We focuses its mining efforts on a diverse range of popular cryptocurrencies, ensuring a strategic approach to maximize returns for our miners.</p>
				</div>
				<!-- end section title -->
			</div>

			<div class="row">
				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--up">Bitcoin</span>
						<span class="popular__price">$8861.14 (+1.3%)</span>
						<span class="popular__cap">Cap.: $14562176.32</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--up">Ethereum</span>
						<span class="popular__price">$240.57 (+4.1%)</span>
						<span class="popular__cap">Cap.: $71497612.98</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--down">Startcoin</span>
						<span class="popular__price">$161.54 (-0.7%)</span>
						<span class="popular__cap">Cap.: $14562176.32</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--up">Litecoin</span>
						<span class="popular__price">$58.86 (+2.1%)</span>
						<span class="popular__cap">Cap.: $23562176.24</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--down">Dash</span>
						<span class="popular__price">$187.54 (-3.2%)</span>
						<span class="popular__cap">Cap.: $11562174.12</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--down">Monero</span>
						<span class="popular__price">$89.51 (-0.9%)</span>
						<span class="popular__cap">Cap.: $10367876.71</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--up">Infinitecoin</span>
						<span class="popular__price">134.93 (+5.1%)</span>
						<span class="popular__cap">Cap.: $13596476.63</span>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<div class="popular">
						<span class="popular__name popular__name--up">PrimeCoin</span>
						<span class="popular__price">$92.13 (+4.7%)</span>
						<span class="popular__cap">Cap.: $10062176.54</span>
					</div>
				</div>
				
				<div class="col-12">
					<a href="https://smartmine.volkovdesign.com/index2.html#" class="btn btn--center btn--section btn--shadow">get started</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end popular --> --}}