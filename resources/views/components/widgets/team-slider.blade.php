<section class="team section-padding">
	<div class="container">
		<div class="sec-head mb-40">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="text-center">
						<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Our Team Member</h6>
						<h3 class="fw-700 js-splittext-lines">What People Says Our Best Of Digital Agency Team Member</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
            @foreach ($team as $key => $member)
                <div class="col-lg-3 col-md-6">
                    <div class="item mt-40 wow fadeInUp" data-wow-delay="{{ 0.2 * ($key+1) }}s">
                        <div class="img">
                            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="info text-center mt-15">
                            <h5 class="fw-700 mb-5">{{ $member->name }}</h5>
                            <span class="sub-font p-color text-u">{{ $member->rank }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
			{{-- <div class="col-lg-3 col-md-6">
				<div class="item mt-40 wow fadeInUp" data-wow-delay="0.4s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/2.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Sebastian Daniel</h5>
						<span class="sub-font p-color text-u">Brand Ambassador</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item mt-40 wow fadeInUp" data-wow-delay="0.6s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/3.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Michael Alexander</h5>
						<span class="sub-font p-color text-u">Creative Director</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item mt-40 wow fadeInUp" data-wow-delay="0.8s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/4.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Asher Samuel</h5>
						<span class="sub-font p-color text-u">Front end developer</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item mt-40 wow fadeInUp" data-wow-delay="1s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/2.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Sebastian Daniel</h5>
						<span class="sub-font p-color text-u">Brand Ambassador</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item mt-40 wow fadeInUp" data-wow-delay="1.2s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/3.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Michael Alexander</h5>
						<span class="sub-font p-color text-u">Creative Director</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item mt-40 sm-mb30 wow fadeInUp" data-wow-delay="1.4s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/4.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Asher Samuel</h5>
						<span class="sub-font p-color text-u">Front end developer</span>
					</div>
				</div>
			</div> --}}
			<div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
				<a href="{{ route('register') }}"
					class="butn-circle d-flex align-items-center justify-content-center text-center wow fadeInUp" data-wow-delay="1.6s">
					<div>
						<span class="text fw-700 mb-15">Join Our Team</span>
						<br>
						<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
							viewBox="0 0 37 36" fill="none">
							<path
								d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
								stroke="#141414" stroke-width="2"></path>
						</svg>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- team -->
{{-- <section class="section">
  <div class="container">
      <div class="row">
          <!-- section title -->
          <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
              <h2 class="section__title">Our Team</h2>
              <p class="section__text">Our mission is to provide quality guidance, build relationships of trust, for our teams.</p>
          </div>
          <!-- end section title -->
      </div>

      <div class="row">
        @foreach ($team as $key => $member)
          <div class="col-12 col-sm-6 col-lg-3">
              <!-- member -->
              <div class="team">
                  <div class="team__img">
                      <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                  </div>
                  <h3 class="team__title">{{ $member->name }}</h3>
                  <p class="team__position">{{ $member->rank }}</p>
                  <ul class="team__social">
                      <li><a href="#"><svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.98482 18V8.99895H8.4695L8.79878 5.89713H5.98482L5.98904 4.34465C5.98904 3.53565 6.0659 3.10216 7.22786 3.10216H8.78119V0H6.29615C3.31122 0 2.2606 1.50471 2.2606 4.03517V5.89748H0.399994V8.9993H2.2606V18H5.98482Z"></path></svg></a></li>
                      <li><a href="#"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.34034 2.50228C4.34034 3.61532 3.50252 4.50594 2.15726 4.50594H2.13261C0.837356 4.50594 0 3.61532 0 2.50228C0 1.36569 0.862859 0.5 2.18269 0.5C3.50252 0.5 4.3153 1.36569 4.34034 2.50228ZM4.08623 6.08806V17.68H0.228131V6.08806H4.08623ZM17.9998 17.6801L18 11.0337C18 7.4731 16.0967 5.81596 13.5579 5.81596C11.5095 5.81596 10.5924 6.94108 10.0803 7.73038V6.08847H6.22177C6.27262 7.1762 6.22177 17.6804 6.22177 17.6804H10.0803V11.2065C10.0803 10.8601 10.1054 10.5145 10.2074 10.2664C10.4862 9.57432 11.1211 8.85773 12.187 8.85773C13.5836 8.85773 14.1419 9.92069 14.1419 11.4784V17.6801H17.9998Z"></path></svg></a></li>
                      <li><a href="#"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.74003 4.35702L8.77904 5.00041L8.12875 4.92163C5.76165 4.61963 3.6937 3.59546 1.93789 1.87538L1.0795 1.02191L0.858395 1.65217C0.39018 3.05712 0.689318 4.54085 1.66477 5.53876C2.18501 6.09023 2.06795 6.16901 1.17054 5.84075C0.858396 5.73571 0.58527 5.65693 0.559258 5.69632C0.468216 5.78823 0.78036 6.9831 1.02747 7.45579C1.36563 8.11231 2.05495 8.7557 2.80929 9.13648L3.44659 9.43847L2.69224 9.45161C1.9639 9.45161 1.93789 9.46474 2.01593 9.74047C2.27605 10.5939 3.30352 11.4999 4.44805 11.8939L5.25442 12.1696L4.5521 12.5898C3.51162 13.1938 2.28905 13.5352 1.06649 13.5614C0.481222 13.5745 0 13.6271 0 13.6665C0 13.7978 1.58673 14.5331 2.51016 14.8219C5.28043 15.6754 8.57095 15.3078 11.0421 13.8503C12.7979 12.813 14.5537 10.7515 15.3731 8.7557C15.8153 7.69214 16.2575 5.74884 16.2575 4.81659C16.2575 4.21259 16.2965 4.13381 17.0248 3.41164C17.454 2.99146 17.8572 2.5319 17.9353 2.4006C18.0653 2.15112 18.0523 2.15112 17.389 2.37434C16.2835 2.76825 16.1274 2.71573 16.6737 2.12486C17.0769 1.70469 17.5581 0.943126 17.5581 0.71991C17.5581 0.680519 17.363 0.746171 17.1419 0.864344C16.9078 0.995648 16.3876 1.1926 15.9974 1.31078L15.295 1.53399L14.6578 1.10069C14.3066 0.864344 13.8124 0.601736 13.5522 0.522954C12.8889 0.339129 11.8745 0.36539 11.2762 0.575476C9.65045 1.16634 8.62297 2.68947 8.74003 4.35702Z"></path></svg></a></li>
                  </ul>
              </div>
              <!-- end member -->
          </div>
        @endforeach
      </div>
  </div>
</section>
<!-- end team --> --}}