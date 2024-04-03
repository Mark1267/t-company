@extends('layouts.app', ['title' => 'Welcome'])

@section('css')
    
<style>
    /* line 4, src/{{ asset('open') }}/scss/components/contact-section/_location-map.scss */
    .network-map-wrap {
    position: relative;
    display: block;
    width: 100%;
    }

    /* line 10, src/{{ asset('open') }}/scss/components/contact-section/_location-map.scss */
    .network-map-wrap ul li {
    position: absolute;
    z-index: 1;
    width: 10px;
    height: 10px;
    margin: -6px;
    background-color: #1062fe;
    border-radius: 50%;
    }

    /* line 20, src/{{ asset('open') }}/scss/components/contact-section/_location-map.scss */
    .network-map-wrap ul li span {
    display: block;
    width: 10px;
    height: 10px;
    -webkit-animation: ripple 1s linear infinite;
    animation: ripple 1s linear infinite;
    -webkit-transition: .5s linear;
    border-radius: 50%;
    }

    /*circle wave*/
    @-webkit-keyframes ripple {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(0, 115, 236, 0.1), 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1);
        box-shadow: 0 0 0 0 rgba(0, 115, 236, 0.1), 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1), 0 0 0 30px rgba(0, 115, 236, 0);
        box-shadow: 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1), 0 0 0 30px rgba(0, 115, 236, 0);
    }
    }

    @keyframes ripple {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(0, 115, 236, 0.1), 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1);
        box-shadow: 0 0 0 0 rgba(0, 115, 236, 0.1), 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1);
    }
    100% {
        -webkit-box-shadow: 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1), 0 0 0 30px rgba(0, 115, 236, 0);
        box-shadow: 0 0 0 10px rgba(0, 115, 236, 0.1), 0 0 0 20px rgba(0, 115, 236, 0.1), 0 0 0 30px rgba(0, 115, 236, 0);
    }
    }

</style>
@endsection

@section('content')
   <!-- ==================== Start Header ==================== -->
   <header class="header-business">
	<div class="container section-padding position-re">
		<div class="row">
			<div class="col-lg-6">
				<div class="caption">
					<h1>Clean Energy Solution</h1>
					<div class="row">
						<div class="col-md-5 offset-md-2">
							<div class="text mt-50 mb-40">
								<p>Empowering global clean energy initiatives for sustainable futures.</p>
							</div>
							<a href="#0"
								class="butn-circle d-flex align-items-center justify-content-center text-center">
								<div>
									<span class="text fw-700 mb-15">Discover More</span>
									<br>
									<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
										viewBox="0 0 37 36" fill="none">
										<path
											d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
											stroke="#141414" stroke-width="2" />
									</svg>
								</div>
							</a>
						</div>
					</div>
					<div class="v-img">
						<img src="{{ asset('open') }}/imgs/header/b-vector.svg" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="b-img">
			<img src="{{ asset('img/3.PNG') }}" style="scale: .7" alt="">
			<a href="https://youtu.be/AzwC6umvd1s"
				class="vid d-flex align-items-center justify-content-center wow fadeIn" data-wow-delay="0.4s">
				<div class="text-center">
					<span>Play</span> <br>
					<span class="ti-control-play mt-10"></span>
				</div>
			</a>
		</div>
		<div class="seo-img">
			<img src="{{ asset('open') }}/imgs/header/hello-seo.png" alt="">
		</div>
	</div>
</header>
<!-- ==================== End Header ==================== -->

<!-- ==================== Start Intro ==================== -->
<section class="intro-2 style2 section-padding">
	<div class="container position-re">
		<div class="row">
			<div class="col-lg-9">
				<div class="cont">
					<h6 class="md-title mb-15 wow fadeInUp" data-wow-delay="0.4s">// About History</h6>
					<h2 class="js-splittext-lines">Pioneering clean energy solutions with innovation and dedication, revolutionizing the energy landscape for a sustainable future.</h2>
				</div>
			</div>
			<div class="col-lg-3 d-flex align-items-center justify-content-center">
				<div class="md-hide wow zoomIn" data-wow-delay="0.4s">
					<img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
				</div>
			</div>
		</div>
		<div class="row mt-80">
			<div class="col-lg-2 col-md-4">
				<div class="img-vector md-mb50 sm-hide">
					<img src="{{ asset('open') }}/imgs/vector-img/G.svg" alt="">
				</div>
			</div>
			<div class="col-lg-2 offset-lg-1 col-md-4 offset-md-2">
				<div class="long-arw sm-hide">
					<img src="{{ asset('open') }}/imgs/vector-img/long-arrow.svg" alt="">
				</div>
			</div>
			<div class="col-lg-5">
				<div class="text">
					<p>Under Elon Musk's visionary leadership, {{ config('main.site.name') }} has emerged as the premier choice for clean energy investments. Through innovative strategies and a steadfast commitment to sustainability, {{ config('main.site.name') }} has revolutionized the energy sector. With a focus on cutting-edge technologies and eco-friendly practices, {{ config('main.site.name') }} continues to lead the way in shaping a greener future for generations to come.</p>
					<a href="#0"
						class="butn-circle d-flex align-items-center justify-content-center text-center mt-40">
						<div>
							<span class="text fw-700 mb-15">About More</span>
							<br>
							<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
								viewBox="0 0 37 36" fill="none">
								<path
									d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
									stroke="#141414" stroke-width="2" />
							</svg>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row imgs mt-100">
			<div class="col-lg-6 mt-40 wow fadeIn" data-wow-delay="0.4s">
				<div class="img1 fit-img">
					<img src="{{ asset('img/3.jpg') }}" alt="">
				</div>
			</div>
			<div class="col-lg-4 offset-lg-1 mt-40">
				<div class="img2 fit-img wow fadeIn" data-wow-delay="0.8s">
					<img src="{{ asset('img/p-1.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="circle-img-bord fit-img">
			<img src="{{ asset('open') }}/imgs/hero/2.jpg" alt="">
		</div>
	</div>
</section>
<!-- ==================== End Intro ==================== -->

<!-- ==================== Start Services ==================== -->
<section class="serv-business section-padding pt-0">
	<div class="container">
		<div class="lg-bold-head text-center mb-80">
			<h2 class="sub-font js-splittext-lines">
				Servi<span class="inline">c<span class="icon"><img
							src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt=""></span></span>es
			</h2>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeInUp" data-wow-delay="0.4s">
					<div class="img mb-80">
						<img src="{{ asset('img/4.jpg') }}" alt="">
					</div>
					<div class="cont">
						<h5>Online Support 24 Hours</h5>
						<span class="sub-font p-color mt-20">Discover Support</span>
						<div class="text pt-30 mt-30 bord-thin-top">
							<p>Nulla lobortis orci rutrum cursus Curabiur.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeInUp" data-wow-delay="0.6s">
					<div class="img mb-80">
						<img src="{{ asset('img/5.jpg') }}" alt="">
					</div>
					<div class="cont">
						<h5>8+ Years of Experience</h5>
						<span class="sub-font p-color mt-20">Branding Design</span>
						<div class="text pt-30 mt-30 bord-thin-top">
							<p>Nulla lobortis orci rutrum cursus Curabiur.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item wow fadeInUp" data-wow-delay="0.8s">
					<div class="img mb-80">
						<img src="{{ asset('open') }}/imgs/serv-img/sv3.png" alt="">
					</div>
					<div class="cont">
						<h5>500+ creative Portfolio</h5>
						<span class="sub-font p-color mt-20">Special Offers For You</span>
						<div class="text pt-30 mt-30 bord-thin-top">
							<p>Nulla lobortis orci rutrum cursus Curabiur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================== End Services ==================== -->

<!-- ==================== Start Video ==================== -->
<div class="intro-full-video c-action section-padding bg-img"
	data-background="{{ asset('img/10.jpg') }}" data-overlay-dark="0">
	<div class="container ontop">
		<div class="row justify-content-end">
			<div class="col-lg-7">
				<div class="cont">
					<h2 class="js-splittext-lines">Let’s make something great together!</h2>
					<a href="#0"
						class="butn-circle butn-light d-flex align-items-center justify-content-center text-center mt-30">
						<div>
							<span class="text fw-700 mb-15">Contact Us</span>
							<br>
							<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
								viewBox="0 0 37 36" fill="none">
								<path
									d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
									stroke="#fff" stroke-width="2"></path>
							</svg>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ==================== End Video ==================== -->

<!-- ==================== Start Portfolio ==================== -->
<section class="work-stand3 section-padding">
	<div class="container">
		<div class="sec-head mb-30">
			<div class="row">
				<div class="col-lg-5 col-md-4">
					<h6 class="mb-30 wow fadeInUp" data-wow-delay="0.4s">// Best Of work Services</h6>
					<div class="row sm-hide">
						<div class="col-lg-5">
							<div class="g-img">
								<img src="{{ asset('open') }}/imgs/vector-img/G1.svg" alt="">
							</div>
						</div>
						<div class="col-lg-4 offset-lg-1 valign">
							<div class="icon-img-80 md-hide wow zoomIn" data-wow-delay="1.2s">
								<img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-8 valign">
					<div class="lg-title">
						<h2 class="js-splittext-lines">Lat’s Look Our Project</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-end">
			<!-- filter links -->
			<div class="filtering color2 col-lg-7">
				<div class="filter sm-title">
					<span data-filter='*' class='active'>All</span>
					<span data-filter='.marketing'>Solar Panels</span>
					<span data-filter='.art'>Space</span>
					<span data-filter='.brand'>Electric Cars</span>
\				</div>
			</div>
		</div>
		<div class="gallery row">
			<div class="col-lg-4 col-md-6 items design brand">
				<div class="item mt-30 wow fadeInUp" data-wow-delay="0.2s">
					<div class="img">
						<img src="{{ asset('img/1.jpg') }}" alt="">
					</div>
					<div class="cont">
						<div class="ontop">
							<h6 class="fz-18 mb-10">// Electric Cars</h6>
							<h4>
								<a href="#0">Cyber Truck <br> & Built for any adventure</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 items brand marketing">
				<div class="item mt-30 wow fadeInUp" data-wow-delay="0.4s">
					<div class="img">
						<img src="{{ asset('img/1.webp') }}" alt="">
					</div>
					<div class="cont">
						<div class="ontop">
							<h6 class="fz-18 mb-10">// Solar Panels</h6>
							<h4>
								<a href="#0">Solar Roof <br> & Tesla’s solar roof tiles</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 items art design">
				<div class="item mt-30 wow fadeInUp" data-wow-delay="0.6s">
					<div class="img">
						<img src="{{ asset('img/3.PNG') }}" alt="">
					</div>
					<div class="cont">
						<div class="ontop">
							<h6 class="fz-18 mb-10">// Space Program</h6>
							<h4>
								<a href="#0">Star Ship <br> & Revolutionizing space travel</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 items brand">
				<div class="item mt-30 wow fadeInUp" data-wow-delay="0.8s">
					<div class="img">
						<img src="{{ asset('img/2.jpg') }}" alt="">
					</div>
					<div class="cont">
						<div class="ontop">
							<h6 class="fz-18 mb-10">// Solar Car</h6>
							<h4>
								<a href="#0">Car Mounted <br> & Unlimited solar energy for Tesla</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 items design">
				<div class="item mt-30 wow fadeInUp" data-wow-delay="1s">
					<div class="img">
						<img src="{{ asset('img/1.jpeg') }}" alt="">
					</div>
					<div class="cont">
						<div class="ontop">
							<h6 class="fz-18 mb-10">// Electric Cars</h6>
							<h4>
								<a href="#0">T-Model X <br> & Built for utility and performance.</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 items art marketing">
				<div class="item mt-30 wow fadeInUp" data-wow-delay="1.2s">
					<div class="img">
						<img src="{{ asset('img/2.webp') }}" alt="">
					</div>
					<div class="cont">
						<div class="ontop">
							<h6 class="fz-18 mb-10">// Space Program</h6>
							<h4>
								<a href="#0">Double Boosters <br> & Reuseable Rockets</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================== End Portfolio ==================== -->

<!-- ==================== Start Services ==================== -->
<section class="services-tab sub-bg3 section-padding">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row">
				<div class="col-lg-6">
					<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Best Of work Services</h6>
					<h2 class="fw-700 js-splittext-lines">Freelance Business Name Generator Guide & Ideas Service.</h2>
				</div>
				<div class="col-lg-6 d-flex align-items-center justify-content-end">
					<div class="head-cont">
						<div class="icon-img-60 icon mb-80">
							<img src="{{ asset('open') }}/imgs/vector-img/plus.svg" alt="">
						</div>
						<a href="#0">
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
				<div class="cluom mb-50 pb-50 bord-thin-bottom current" data-tab="tab-1">
					<div class="row">
						<div class="col-md-3">
							<h6 class="fw-700">01.</h6>
						</div>
						<div class="cont col-md-8">
							<h5 class="fw-700">Search Engine Optimization</h5>
							<div class="text mt-15">
								<p>Morbi purus velit, semper eget ante in, feugiat magna. Curabitur
									gravida ornare odio.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cluom mb-50 pb-50 bord-thin-bottom" data-tab="tab-2">
					<div class="row">
						<div class="col-md-3">
							<h6 class="fw-700">02.</h6>
						</div>
						<div class="cont col-md-8">
							<h5 class="fw-700">Web Design & Development</h5>
							<div class="text mt-15">
								<p>Morbi purus velit, semper eget ante in, feugiat magna. Curabitur
									gravida ornare odio.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cluom mb-50 pb-50 bord-thin-bottom" data-tab="tab-3">
					<div class="row">
						<div class="col-md-3">
							<h6 class="fw-700">03.</h6>
						</div>
						<div class="cont col-md-8">
							<h5 class="fw-700">Design & Multimedia</h5>
							<div class="text mt-15">
								<p>Morbi purus velit, semper eget ante in, feugiat magna. Curabitur
									gravida ornare odio.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cluom mb-50 pb-50 bord-thin-bottom" data-tab="tab-4">
					<div class="row">
						<div class="col-md-3">
							<h6 class="fw-700">04.</h6>
						</div>
						<div class="cont col-md-8">
							<h5 class="fw-700">Sofrware Design & Development</h5>
							<div class="text mt-15">
								<p>Morbi purus velit, semper eget ante in, feugiat magna. Curabitur
									gravida ornare odio.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1 d-flex align-items-center justify-content-center">
				<div class="glry-img md-hide">
					<div id="tab-1" class="bg-img tab-img current"
						data-background="{{ asset('open') }}/imgs/serv-img/1.jpg"></div>
					<div id="tab-2" class="bg-img tab-img"
						data-background="{{ asset('open') }}/imgs/serv-img/1.jpg">
					</div>
					<div id="tab-3" class="bg-img tab-img"
						data-background="{{ asset('open') }}/imgs/serv-img/1.jpg">
					</div>
					<div id="tab-4" class="bg-img tab-img"
						data-background="{{ asset('open') }}/imgs/serv-img/1.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================== End Services ==================== -->

<!-- ==================== Start Price ==================== -->
<section class="price section-padding">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="text-center">
						<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Our Best Of Pricing</h6>
						<h3 class="fw-700 js-splittext-lines">What People Says Our Best Of Goncy Digital Agency Pricing
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeIn" data-wow-delay="0.4s">
					<div class="head mb-30">
						<span class="icon-img-80 mb-15">
							<img src="{{ asset('open') }}/imgs/price/1.svg" alt="">
						</span>
						<h5 class="mb-10">Basic Plan</h5>
						<h6 class="fz-16 fw-400 sub-font">Monthly / <span class="opacity-7">Early</span>
						</h6>
					</div>
					<div class="feat mb-30 pb-30 bord-thin-bottom">
						<ul class="rest sub-font">
							<li><span class="ti-check icon"></span> Social media advertising</li>
							<li><span class="ti-check icon"></span> Report analytics</li>
							<li><span class="ti-check icon"></span> Keyword research</li>
							<li><span class="ti-check icon"></span> Content strategy</li>
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
						<h2><span>$</span> 0.96</h2>
						<p>/ Monthly</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeIn" data-wow-delay="0.6s">
					<div class="head mb-30">
						<span class="icon-img-80 mb-15">
							<img src="{{ asset('open') }}/imgs/price/2.svg" alt="">
						</span>
						<h5 class="mb-10">Regular Plan</h5>
						<h6 class="fz-16 fw-400 sub-font">Monthly / <span class="opacity-7">Early</span>
						</h6>
					</div>
					<div class="feat mb-30 pb-30 bord-thin-bottom">
						<ul class="rest sub-font">
							<li><span class="ti-check icon"></span> Social media advertising</li>
							<li><span class="ti-check icon"></span> Report analytics</li>
							<li><span class="ti-check icon"></span> Keyword research</li>
							<li><span class="ti-check icon"></span> Content strategy</li>
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
						<h2><span>$</span> 1.96</h2>
						<p>/ Monthly</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item wow fadeIn" data-wow-delay="0.8s">
					<div class="head mb-30">
						<span class="icon-img-80 mb-15">
							<img src="{{ asset('open') }}/imgs/price/3.svg" alt="">
						</span>
						<h5 class="mb-10">Gold Plan</h5>
						<h6 class="fz-16 fw-400 sub-font">Monthly / <span class="opacity-7">Early</span>
						</h6>
					</div>
					<div class="feat mb-30 pb-30 bord-thin-bottom">
						<ul class="rest sub-font">
							<li><span class="ti-check icon"></span> Social media advertising</li>
							<li><span class="ti-check icon"></span> Report analytics</li>
							<li><span class="ti-check icon"></span> Keyword research</li>
							<li><span class="ti-check icon"></span> Content strategy</li>
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
						<h2><span>$</span> 7.96</h2>
						<p>/ Monthly</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================== End Price ==================== -->

<!-- ==================== Start FAQS ==================== -->
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
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne" aria-expanded="true"
									aria-controls="collapseOne"><span class="face-icon mr-30"><img
											src="{{ asset('open') }}/imgs/vector-img/face.svg" alt=""></span> What
									can we
									do for you with Figma? <span class="icon"><svg
											xmlns="http://www.w3.org/2000/svg" width="19" height="8"
											viewBox="0 0 19 8" fill="none">
											<path
												d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
												stroke="#141414" />
										</svg></span></button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show"
								aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus
										dignissim. Curabitur mauris massa, efficitur vitae nisl nec,
										fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula
										arcu
										in, feugiat velit.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button"
									data-bs-toggle="collapse" data-bs-target="#collapseTwo"
									aria-expanded="false" aria-controls="collapseTwo">
									<span class="face-icon mr-30"><img
											src="{{ asset('open') }}/imgs/vector-img/face.svg" alt=""></span> Do you
									create one single full home page?<span class="icon"><svg
											xmlns="http://www.w3.org/2000/svg" width="19" height="8"
											viewBox="0 0 19 8" fill="none">
											<path
												d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
												stroke="#141414" />
										</svg></span>
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse"
								aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus
										dignissim. Curabitur mauris massa, efficitur vitae nisl nec,
										fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula
										arcu
										in, feugiat velit.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button"
									data-bs-toggle="collapse" data-bs-target="#collapseThree"
									aria-expanded="false" aria-controls="collapseThree">
									<span class="face-icon mr-30"><img
											src="{{ asset('open') }}/imgs/vector-img/face.svg" alt=""></span>What is
									the standard size of business cards?<span class="icon"><svg
											xmlns="http://www.w3.org/2000/svg" width="19" height="8"
											viewBox="0 0 19 8" fill="none">
											<path
												d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
												stroke="#141414" />
										</svg></span>
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse"
								aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus
										dignissim. Curabitur mauris massa, efficitur vitae nisl nec,
										fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula
										arcu
										in, feugiat velit.</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button"
									data-bs-toggle="collapse" data-bs-target="#collapseFour"
									aria-expanded="false" aria-controls="collapseFour">
									<span class="face-icon mr-30"><img
											src="{{ asset('open') }}/imgs/vector-img/face.svg" alt=""></span>What
									should be on an agency website?<span class="icon"><svg
											xmlns="http://www.w3.org/2000/svg" width="19" height="8"
											viewBox="0 0 19 8" fill="none">
											<path
												d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
												stroke="#141414" />
										</svg></span>
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse"
								aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Morbi tempor pharetra dui vitae condimentum. Morbi mattis cursus
										dignissim. Curabitur mauris massa, efficitur vitae nisl nec,
										fringilla commodo nisl. Quisque eu tellus tincidunt, vehicula
										arcu
										in, feugiat velit.</p>
								</div>
							</div>
						</div>
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
<!-- ==================== End FAQS ==================== -->

<!-- ==================== Start Team ==================== -->
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
			<div class="col-lg-3 col-md-6">
				<div class="item mt-40 wow fadeInUp" data-wow-delay="0.2s">
					<div class="img">
						<img src="{{ asset('open') }}/imgs/team/1.jpg" alt="">
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="info text-center mt-15">
						<h5 class="fw-700 mb-5">Benjamin Theodore</h5>
						<span class="sub-font p-color text-u">Creative UX/UI Design</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
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
			</div>
			<div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center">
				<a href="#0"
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
<!-- ==================== End Team ==================== -->

<!-- ==================== Start Numbers ==================== -->
<section class="numbers section-padding sub-bg3">
	<div class="container ontop">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<div>
						<h3>5K</h3>
						<div>
							<span class="icon">
								<i class="ti-plus"></i>
							</span>
							<span class="sm-title">Project Complete</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<div>
						<h3>98%</h3>
						<div>
							<span class="icon">
								<i class="ti-plus"></i>
							</span>
							<span class="sm-title">Success Rate</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<div>
						<h3>30</h3>
						<div>
							<span class="icon">
								<i class="ti-plus"></i>
							</span>
							<span class="sm-title">Awards Winning</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="item">
					<div>
						<h3>12</h3>
						<div>
							<span class="icon">
								<i class="ti-plus"></i>
							</span>
							<span class="sm-title">Years Of Experience</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================== End Numbers ==================== -->

<!-- ==================== Start Blog ==================== -->
<section class="blog section-padding pb-80">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row">
				<div class="col-lg-6">
					<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Our Latest News & Blogs</h6>
					<h2 class="fw-700 js-splittext-lines">We solution with the Our Latest News & Blogs</h2>
				</div>
				<div class="col-lg-6 d-flex align-items-center justify-content-end">
					<div class="head-cont">
						<div class="icon-img-60 icon mb-80">
							<img src="{{ asset('open') }}/imgs/vector-img/plus.svg" alt="">
						</div>
						<a href="#0">
							<span class="text mr-15">View All Posts</span>
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
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeInUp" data-wow-delay="0.4s">
					<div class="img fit-img">
						<img src="{{ asset('open') }}/imgs/blog/1.jpg" alt="">
					</div>
					<div class="cont mt-20">
						<div class="info d-flex align-items-center p-style mb-20">
							<div class="date">
								<span class="icon ti-calendar"></span>
								<span class="opacity-8 ml-10">02 January 2023</span>
							</div>
							<div class="author ml-40">
								<span>by.</span>
								<span class="opacity-8 ml-10">Thumamah</span>
							</div>
						</div>
						<h5 class="fw-700">
							<a href="#0">How to Start a Blog Beginner Best Tooling Agency</a>
						</h5>
						<div class="view fw-700 mt-30 pt-30 bord-thin-top">
							<a href="#0">
								<span>Read More</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
									viewBox="0 0 37 36" fill="none">
									<path
										d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
										stroke="#141414" stroke-width="2"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeInUp" data-wow-delay="0.6s">
					<div class="img fit-img">
						<img src="{{ asset('open') }}/imgs/blog/2.jpg" alt="">
					</div>
					<div class="cont mt-20">
						<div class="info d-flex align-items-center p-style mb-20">
							<div class="date">
								<span class="icon ti-calendar"></span>
								<span class="opacity-8 ml-10">02 January 2023</span>
							</div>
							<div class="author ml-40">
								<span>by.</span>
								<span class="opacity-8 ml-10">Thumamah</span>
							</div>
						</div>
						<h5 class="fw-700">
							<a href="#0">How To Start A Blog With WordPress In Steps</a>
						</h5>
						<div class="view fw-700 mt-30 pt-30 bord-thin-top">
							<a href="#0">
								<span>Read More</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
									viewBox="0 0 37 36" fill="none">
									<path
										d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
										stroke="#141414" stroke-width="2"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="item wow fadeInUp" data-wow-delay="0.8s">
					<div class="img fit-img">
						<img src="{{ asset('open') }}/imgs/blog/3.jpg" alt="">
					</div>
					<div class="cont mt-20">
						<div class="info d-flex align-items-center p-style mb-20">
							<div class="date">
								<span class="icon ti-calendar"></span>
								<span class="opacity-8 ml-10">02 January 2023</span>
							</div>
							<div class="author ml-40">
								<span>by.</span>
								<span class="opacity-8 ml-10">Thumamah</span>
							</div>
						</div>
						<h5 class="fw-700">
							<a href="#0">How Long Should a Blog Post Be Everything There's to Know</a>
						</h5>
						<div class="view fw-700 mt-30 pt-30 bord-thin-top">
							<a href="#0">
								<span>Read More</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
									viewBox="0 0 37 36" fill="none">
									<path
										d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
										stroke="#141414" stroke-width="2"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================== End Blog ==================== -->

<!-- ==================== Start Brands ==================== -->
<div class="brands section-padding pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg col-md-4 col-6">
				<div class="item">
					<a href="#0">
						<img src="{{ asset('open') }}/imgs/brands/2.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg col-md-4 col-6">
				<div class="item">
					<a href="#0">
						<img src="{{ asset('open') }}/imgs/brands/2.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg col-md-4 col-6">
				<div class="item">
					<a href="#0">
						<img src="{{ asset('open') }}/imgs/brands/3.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg col-md-4 col-6">
				<div class="item">
					<a href="#0">
						<img src="{{ asset('open') }}/imgs/brands/4.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg col-md-4 col-6">
				<div class="item">
					<a href="#0">
						<img src="{{ asset('open') }}/imgs/brands/5.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ==================== End Brands ==================== -->

@endsection

@section('js_lib')
    
@endsection

@section('js')
@endsection
