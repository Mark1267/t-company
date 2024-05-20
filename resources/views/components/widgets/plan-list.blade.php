<section class="price section-padding">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="text-center">
						<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Our Best Of Pricing</h6>
						<h3 class="fw-700 js-splittext-lines">What People Says Our Best Of {{ config('settings.site.name') }}
						</h3>
					</div>
				</div>
			</div>
		</div>
        @foreach ($categories() as $category)
            <div class="row">
                @foreach ($category->plans as $key => $plan)
                <div class="col-lg-4">
                    <div class="item md-mb50 wow fadeIn" data-wow-delay="0.4s">
                        <div class="head mb-30">
                            <span class="icon-img-80 mb-15">
                                <img src="{{ asset('open') }}/imgs/price/1.svg" alt="">
                            </span>
                            <h5 class="mb-10">{{ $plan->name }}</h5>
                            <h6 class="fz-16 fw-400 sub-font">{{ $plan->time . ' ' . $plan->planTime->suffix }} / <span class="opacity-7">{{ $plan->rate }}%</span>
                            </h6>
                        </div>
                        <div class="feat mb-30 pb-30 bord-thin-bottom">
                            <ul class="rest sub-font">
                                <li><span class="ti-check icon"></span> Min. Invest: ${{ $plan->min }}</li>
                                <li><span class="ti-check icon"></span> Max. Invest: ${{ $plan->max }}</li>
                                <li><span class="ti-check icon"></span> 10% Referral Bonus</li>
                                <li><span class="ti-check icon"></span> 24/7 Customer Care</li>
                                <li><span class="ti-check icon"></span> Customizable registration</li>
                            </ul>
                            <a href="#0" class="view mt-15">
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
                                    viewBox="0 0 37 36" fill="none">
                                    <path
                                        d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
                                        stroke="#141414" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="amount d-flex align-items-end">
                            <h2><span>$</span> {{ $plan->min }}</h2>
                            <p>/ {{ $plan->rate }}%</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach
	</div>
</section>