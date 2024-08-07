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
							<a href="{{ route('register') }}"
								class="butn d-flex align-items-center justify-content-center text-center"
								style="background: black; color: white; padding: 15px;"
							>
								<div>
									<span class="text fw-700">Create an Account</span>
									{{-- <br> --}}
									{{-- <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
										viewBox="0 0 37 36" fill="none">
										<path
											d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
											stroke="#141414" stroke-width="2" />
									</svg> --}}
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
			<a href="https://youtu.be/TWLP2Wj90ck"
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
					<h2 class="js-splittext-lines" style="font-size: 20px">Pioneering clean energy solutions with innovation and dedication, revolutionizing the energy landscape for a sustainable future.</h2>
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
					<img src="{{ asset(config('main.site.logo.favi')) }}" alt="">
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
					<a href="{{ route('news.signle', ['id' => 3]) }}"
						class="butn-circle d-flex align-items-center justify-content-center text-center mt-40">
						<div>
							{{-- <br> --}}
							<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
								viewBox="0 0 37 36" fill="none">
								<path
									d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
									stroke="#141414" stroke-width="2" />
							</svg>
							<span class="text fw-700 mb-15">About More</span>
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
<section class="serv-box section-padding">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="text-center">
						<h6 class="mb-15">// Our Best Of Service</h6>
						<h3 class="fw-700">What People Says Our Best Of {{ config('main.site.name') }}
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="serv-swiper" data-carousel="swiper" data-items="3" data-loop="true" data-space="30">
			<div id="content-carousel-container-unq-serv" class="swiper-container"
				data-swiper="container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item text-center">
							<span class="icon-img-70 mb-40">
								<img src="{{ asset('open') }}/imgs/serv-img/s1.svg" alt="">
							</span>
							<h5>Marketing Strategy services</h5>
							{{-- <div class="text mt-20">
								<p>Pellentesque sit amet urna justo. Fusce velit nibh commodo iaculis
									vestibulum condimentum.</p>
							</div> --}}
							<a href="#0" class="arrow mt-40">
								<span><svg width="34" height="13" viewBox="0 0 34 13" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M0.0294371 0.99986H31.5563C32.4473 0.99986 32.8934 2.077 32.2635 2.70697L23.5458 11.4246L20.3941 8.27296"
											stroke="#141414" stroke-width="2"></path>
									</svg>
								</span>
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item text-center">
							<span class="icon-img-70 mb-40">
								<img src="{{ asset('open') }}/imgs/serv-img/s2.svg" alt="">
							</span>
							<h5>Secure Data & Analytics Service</h5>
							{{-- <div class="text mt-20">
								<p>Pellentesque sit amet urna justo. Fusce velit nibh commodo iaculis
									vestibulum condimentum.</p>
							</div> --}}
							<a href="#0" class="arrow mt-40">
								<span><svg width="34" height="13" viewBox="0 0 34 13" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M0.0294371 0.99986H31.5563C32.4473 0.99986 32.8934 2.077 32.2635 2.70697L23.5458 11.4246L20.3941 8.27296"
											stroke="#141414" stroke-width="2"></path>
									</svg>
								</span>
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="item text-center">
							<span class="icon-img-70 mb-40">
								<img src="{{ asset('open') }}/imgs/serv-img/s3.svg" alt="">
							</span>
							<h5>Energy Efficient Investment Options </h5>
							{{-- <div class="text mt-20">
								<p>Pellentesque sit amet urna justo. Fusce velit nibh commodo iaculis
									vestibulum condimentum.</p>
							</div> --}}
							<a href="{{ route('register') }}" class="arrow mt-40">
								<span><svg width="34" height="13" viewBox="0 0 34 13" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M0.0294371 0.99986H31.5563C32.4473 0.99986 32.8934 2.077 32.2635 2.70697L23.5458 11.4246L20.3941 8.27296"
											stroke="#141414" stroke-width="2"></path>
									</svg>
								</span>
							</a>
						</div>
					</div>
					{{-- <div class="swiper-slide">
						<div class="item text-center">
							<span class="icon-img-70 mb-40">
								<img src="{{ asset('open') }}/imgs/serv-img/s1.svg" alt="">
							</span>
							<h5>Marketing Strategy services</h5>
							{{-- <div class="text mt-20">
								<p>Pellentesque sit amet urna justo. Fusce velit nibh commodo iaculis
									vestibulum condimentum.</p>
							</div> --}
							<a href="{{ route('register') }}" class="arrow mt-40">
								<span><svg width="34" height="13" viewBox="0 0 34 13" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M0.0294371 0.99986H31.5563C32.4473 0.99986 32.8934 2.077 32.2635 2.70697L23.5458 11.4246L20.3941 8.27296"
											stroke="#141414" stroke-width="2"></path>
									</svg>
								</span>
							</a>
						</div>
					</div> --}}
				</div>
			</div>
			<div class="swiper-pagination"></div>
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
				<div class="col-lg-3 col-md-2">
					<h6 class="mb-30 wow fadeInUp" data-wow-delay="0.4s">// Best Of #Work Services</h6>
					<div class="row sm-hide">
						<div class="col-lg-5">
							<div class="g-img">
								<img src="{{ asset(config('main.site.logo.favi')) }}" alt="">
							</div>
						</div>
						<div class="col-lg-4 offset-lg-1 valign">
							<div class="icon-img-80 md-hide wow zoomIn" data-wow-delay="1.2s">
								<img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-10 valign">
					<div class="lg-title">
						<h2 class="js-splittext-lines">Let’s Look Our Project</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-end">
			<!-- filter links -->
			<div class="filtering color2 col-lg-11">
				<div class="filter sm-title">
					<span data-filter='*' class='active'>All</span>
					<span data-filter='.marketing'>Solar Panels</span>
					<span data-filter='.art'>Space</span>
					<span data-filter='.brand'>Electric Cars</span>
				</div>
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
<x-Widgets.Service />
<!-- ==================== End Services ==================== -->

@include('layouts.widgets.realestate')

<!-- ==================== Start Price ==================== -->
<x-Widgets.Plan-List />
<!-- ==================== End Price ==================== -->

<!-- ==================== Start FAQS ==================== -->
<x-Widgets.FAQs />
<!-- ==================== End FAQS ==================== -->

<!-- ==================== Start Team ==================== -->
<x-Widgets.Team-Slider />
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
<x-Widgets.Blog-Slider />
<!-- ==================== End Blog ==================== -->

<!-- ==================== Start Brands ==================== -->
{{-- @include('layouts.widgets.clients') --}}
<!-- ==================== End Brands ==================== -->
@endsection

@section('js_lib')
    
@endsection

@section('js')

@endsection
