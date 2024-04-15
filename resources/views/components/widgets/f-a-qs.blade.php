<section class="faqs">
	<div class="main-marq sub-font mb-80">
		<div class="slide-har st1">
			<div class="box non-strok">
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
			</div>
			<div class="box non-strok">
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
				<div class="item">
					<h4 class="d-flex align-items-center"><span>Frequency</span> <span class="icon"><img
								src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></h4>
				</div>
			</div>
		</div>
	</div>
	<div class="position-re">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="sec-head mb-40">
						<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Our Frequency & Question's</h6>
						<h3 class="fw-700 mb-15 js-splittext-lines">We Provide brilliant ideas <br> Frequency & question's
						</h3>
						<h5 class="sub-font fw-500 mb-10 js-splittext-lines">Donec ac augue a enim tempus cinia sed id
							odio. Orci
							arius natoque penatibu magnis parturient.</h5>
					</div>
					<div class="accordion" id="accordionExample">
                        @foreach ($faqs() as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $key+1 }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $key+1 }}" aria-expanded="true"
                                        aria-controls="collapse{{ $key+1 }}"><span class="face-icon mr-30"><img
                                                src="{{ asset('open') }}/imgs/vector-img/face.svg" alt=""></span> {{ $faq->question }} <span class="icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="19" height="8"
                                                viewBox="0 0 19 8" fill="none">
                                                <path
                                                    d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
                                                    stroke="#141414" />
                                            </svg></span></button>
                                </h2>
                                <div id="collapse{{ $key+1 }}" class="accordion-collapse collapse show"
                                    aria-labelledby="heading{{ $key+1 }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="imgs">
			<div class="img1 fit-img wow fadeIn" data-wow-delay="0.4s">
				<img src="{{ asset('open') }}/imgs/hero/f1.jpg" alt="">
			</div>
			<div class="img2 fit-img wow fadeIn" data-wow-delay="0.6s">
				<img src="{{ asset('open') }}/imgs/hero/f2.jpg" alt="">
			</div>
			<div class="img3 fit-img wow fadeIn" data-wow-delay="0.8s">
				<img src="{{ asset('open') }}/imgs/hero/f3.jpg" alt="">
			</div>
		</div>
	</div>
</section>