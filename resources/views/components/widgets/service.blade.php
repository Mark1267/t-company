<section class="services-tab sub-bg3 section-padding" style="margin-bottom: 2rem">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row">
				<div class="col-lg-6">
					<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Best Of work Services</h6>
					{{-- <h2 class="fw-700 js-splittext-lines">Freelance Business Name Generator Guide & Ideas Service.</h2> --}}
				</div>
				<div class="col-lg-6 d-flex align-items-center justify-content-end">
					<div class="head-cont">
						<div class="icon-img-60 icon mb-80">
							<img src="{{ asset('open') }}/imgs/vector-img/plus.svg" alt="">
						</div>
						<a href="{{ route('services') }}">
							<span class="text mr-15">View All Service</span>
							<span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="8"
									viewBox="0 0 19 8" fill="none">
									<path
										d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
										stroke="#141414" />
								</svg></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 content">
                @foreach ($services() as $key => $service)
                    <div class="cluom mb-50 pb-50 bord-thin-bottom current" data-tab="tab-{{ $key+1 }}">
                        <div class="row">
                            <div class="col-md-3">
                                <h6 class="fw-700">{{ $key+1 }}.</h6>
                            </div>
                            <div class="cont col-md-8">
                                <h5 class="fw-700">{{ $service->title }}</h5>
                                <div class="text mt-15">
                                    <p>{{ $service->sub_title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
			<div class="col-lg-5 offset-lg-1 d-flex align-items-center justify-content-center">
				<div class="glry-img md-hide">
                    @foreach ($services() as $key => $service)
					<div id="tab-{{ $key+1 }}" class="bg-img tab-img current" data-background="{{ asset($service->image) }}"></div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
    <br><br><br>
</section>