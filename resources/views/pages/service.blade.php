@extends('layouts.app', ['title' => 'Our Services'])

@section('css')
<style>
</style>
@endsection

@section('content')
 <!-- ==================== Start Header ==================== -->

 <header class="page-header section-padding sub-bg">
  <div class="container">
      <div class="row">
          <div class="col-lg-9">
              <div class="caption">
                  <h1>Our Service</h1>
                  <div class="row mt-30">
                      <div class="col-lg-5 col-md-6">
                          <div class="d-flex align-items-center">
                              <div>
                                  <div class="icon-img-80">
                                      <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
                                  </div>
                              </div>
                              <div class="text ml-30">
                                  <span class="p-style">
                                    Experience the Evolution of Energy production at {{ config('settings.site.name') }}, Where Innovation Meets Purpose</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 offset-lg-1 col-md-6 valign">
                          <div class="d-flex align-items-center">
                              <div class="long-arw mr-30">
                                  <img src="{{ asset('open') }}/imgs/vector-img/long-arrow.svg" alt="">
                              </div>
                              <div class="fw-500 sub-font">
                                  <span class="opacity-7">
                                      <a href="{{ route('home') }}">Home</a>
                                  </span>
                                  <span class="ml-10 mr-10">/</span>
                                  <span>Services</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-end">
              <div class="img-circle">
                  <img src="{{ asset('open') }}/imgs/header/Circle.svg" alt="">
              </div>
          </div>
      </div>
  </div>
</header>

<!-- ==================== End Header ==================== -->

<!-- ==================== Start About ==================== -->

<section class="intro-marketing section-padding">
  <div class="container">
      <div class="row">
          <div class="col-lg-5">
              <div class="img md-mb50">
                  <img src="{{ asset('open') }}/imgs/hero/intro-m.png" alt="">
              </div>
          </div>
          <div class="col-lg-6 offset-lg-1 valign">
              <div class="cont">
                  <h6 class="mb-15">// Why Choose Us</h6>
                  <h3 class="mb-20">We Provide brilliant ideas <br> in solving energy problems</h3>
                  <h6 class="sub-font mb-10">With a commitment to excellence and a focus on customer satisfaction.</h6>
                  <p>We strive to exceed expectations and deliver exceptional value in every deal.</p>
                  <div class="row mt-40 pt-40 bord-thin-top">
                      <div class="col-md-6">
                          <div class="item d-flex align-items-center sm-mb30">
                              <div>
                                  <span class="icon-img-40 mr-30">
                                      <img src="{{ asset('open') }}/imgs/vector-img/boxs.svg" alt="">
                                  </span>
                              </div>
                              <h6>Online Courses For Ux/UI Design</h6>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="item d-flex align-items-center">
                              <div>
                                  <span class="icon-img-40 mr-30">
                                      <img src="{{ asset('open') }}/imgs/vector-img/boxs.svg" alt="">
                                  </span>
                              </div>
                              <h6>Digital Marketing & Branding Design</h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="v-img fit-img">
          <img src="{{ asset('open') }}/imgs/hero/m5.jpg" alt="">
      </div>
  </div>
  <div class="vector-icon">
      <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
  </div>
</section>

<!-- ==================== End About ==================== -->



<!-- ==================== Start Services ==================== -->

<section class="serv-box section-padding">
  <div class="container">
      <div class="sec-head mb-80">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="text-center">
                      <h6 class="mb-15">// Our Best Of Service</h6>
                      <h3 class="fw-700">What People Says Our Best Of Goncy Digital Agency Website
                      </h3>
                  </div>
              </div>
          </div>
      </div>
      <div class="serv-swiper" data-carousel="swiper" data-items="3" data-loop="true" data-space="30">
          <div id="content-carousel-container-unq-serv" class="swiper-container"
              data-swiper="container">
              <div class="swiper-wrapper">
                @foreach ($services as $service)
                  <div class="swiper-slide">
                      <div class="item text-center">
                          <span class="icon-img-70 mb-40">
                              <img src="{{ asset($service->image) }}" style="height: 70px; border-radius: 1000px" alt="{{ $service->title }}">
                          </span>
                          <h5>{{ $service->title }}</h5>
                          <div class="text mt-20">
                              <p>{{ $service->sub_title }}.</p>
                          </div>
                          <a href="{{ route('news.signle', ['id' => $service->id]) }}" class="arrow mt-40">
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
                  @endforeach
              </div>
          </div>
          <div class="swiper-pagination"></div>
      </div>
  </div>
</section>

<!-- ==================== End Services ==================== -->



<!-- ==================== Start Numbers ==================== -->

<section class="numbers section-padding num-dark">
  <div class="container ontop">
      <div class="row">
          <div class="col-lg-3 col-md-6">
              <div class="item md-mb30">
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
              <div class="item md-mb30">
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
              <div class="item sm-mb30">
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
  <div class="g-img">
      <img src="{{ asset('open') }}/imgs/vector-img/G2.svg" alt="">
  </div>
</section>

<!-- ==================== End Numbers ==================== -->



<!-- ==================== Start Why Us ==================== -->

<section class="why-us">
  <div class="container section-padding">
      <div class="sec-head mb-80">
          <div class="row justify-content-center">
              <div class="col-lg-9">
                  <div class="text">
                      <h2 class="sub-font">Why <br> Choose Us</h2>
                      <div class="img-vector">
                          <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-lg-4">
              <div class="g-img">
                  <img src="{{ asset('open') }}/imgs/hero/g1.png" alt="">
              </div>
          </div>
          <div class="col-lg-6 offset-lg-1 valign">
              <div class="clas-skills">
                  <h6 class="mb-15">// Why Choose Us</h6>
                  <h2 class="fw-700 mb-15">We Provide brilliant ideas <br> & the digital agency</h2>
                  <h5 class="sub-font mb-10">Donec ac augue a enim tempus cinia sed id odio. Orci
                      arius natoque penatibu magnis parturient.</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a velit sed quam
                      dignissim facilisis id ac orci. Nam ultricies malesuada arcu ut facilisis.</p>
                  <div class="skills-box mt-40">
                      <div class="skill-item mb-40">
                          <div class="skill-progress">
                              <div class="progres" data-value="85%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Web
                                  Solution</span> <span class="ml-auto fz-14">85%</span></h6>
                      </div>
                      <div class="skill-item mb-40">
                          <div class="skill-progress">
                              <div class="progres" data-value="75%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Mobile
                                  Solution</span> <span class="ml-auto fz-14">75%</span></h6>
                      </div>
                      <div class="skill-item">
                          <div class="skill-progress">
                              <div class="progres" data-value="90%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Business
                                  Solution</span> <span class="ml-auto fz-14">90%</span></h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="img-top-left fit-img">
          <img src="{{ asset('open') }}/imgs/background/1.jpg" alt="">
      </div>
      <div class="img-top-right fit-img">
          <img src="{{ asset('open') }}/imgs/background/2.jpg" alt="">
      </div>
  </div>
</section>

<!-- ==================== End Why Us ==================== -->



<!-- ==================== Start Testimonials ==================== -->

<section class="testimonials section-padding pt-0">
  <div class="container">
      <div class="sec-head mb-80">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="text-center">
                      <h6 class="mb-15">// Our Testimonials</h6>
                      <h3 class="fw-700">What People Says Our Best Of Goncy Digital Agency Website
                      </h3>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
              <div class="testim-swiper3" data-carousel="swiper" data-items="3" data-loop="true"
                  data-space="30">
                  <div id="content-carousel-container-unq-testim" class="swiper-container"
                      data-swiper="container">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="item">
                                  <div class="content">
                                      <div class="info d-flex align-items-center mb-25">
                                          <div>
                                              <div class="fit-img circle">
                                                  <img src="{{ asset('open') }}/imgs/testim/1.jpg" alt="">
                                              </div>
                                          </div>
                                          <div class="ml-20">
                                              <h5 class="fw-700">N. Henry Lucas</h5>
                                              <span class="sub-font opacity-7">Branding
                                                  Specialist</span>
                                          </div>
                                      </div>
                                      <div class="text pb-30 mb-30 bord-thin-bottom">
                                          <h5 class="sub-font fw-400">Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats. Integer, tempus
                                              semper
                                              our has been lecto. Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats.</h5>
                                      </div>
                                      <div class="botm">
                                          <span class="sub-font opacity-7 mb-5">Average 5.00
                                              ratting</span>
                                          <div class="icon-img-90">
                                              <img src="{{ asset('open') }}/imgs/vector-img/star.svg" alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="item">
                                  <div class="content">
                                      <div class="info d-flex align-items-center mb-25">
                                          <div>
                                              <div class="fit-img circle">
                                                  <img src="{{ asset('open') }}/imgs/testim/2.jpg" alt="">
                                              </div>
                                          </div>
                                          <div class="ml-20">
                                              <h5 class="fw-700">N. Henry Lucas</h5>
                                              <span class="sub-font opacity-7">Branding
                                                  Specialist</span>
                                          </div>
                                      </div>
                                      <div class="text pb-30 mb-30 bord-thin-bottom">
                                          <h5 class="sub-font fw-400">Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats. Integer, tempus
                                              semper
                                              our has been lecto. Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats.</h5>
                                      </div>
                                      <div class="botm">
                                          <span class="sub-font opacity-7 mb-5">Average 5.00
                                              ratting</span>
                                          <div class="icon-img-90">
                                              <img src="{{ asset('open') }}/imgs/vector-img/star.svg" alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="item">
                                  <div class="content">
                                      <div class="info d-flex align-items-center mb-25">
                                          <div>
                                              <div class="fit-img circle">
                                                  <img src="{{ asset('open') }}/imgs/testim/3.jpg" alt="">
                                              </div>
                                          </div>
                                          <div class="ml-20">
                                              <h5 class="fw-700">N. Henry Lucas</h5>
                                              <span class="sub-font opacity-7">Branding
                                                  Specialist</span>
                                          </div>
                                      </div>
                                      <div class="text pb-30 mb-30 bord-thin-bottom">
                                          <h5 class="sub-font fw-400">Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats. Integer, tempus
                                              semper
                                              our has been lecto. Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats.</h5>
                                      </div>
                                      <div class="botm">
                                          <span class="sub-font opacity-7 mb-5">Average 5.00
                                              ratting</span>
                                          <div class="icon-img-90">
                                              <img src="{{ asset('open') }}/imgs/vector-img/star.svg" alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="item">
                                  <div class="content">
                                      <div class="info d-flex align-items-center mb-25">
                                          <div>
                                              <div class="fit-img circle">
                                                  <img src="{{ asset('open') }}/imgs/testim/1.jpg" alt="">
                                              </div>
                                          </div>
                                          <div class="ml-20">
                                              <h5 class="fw-700">N. Henry Lucas</h5>
                                              <span class="sub-font opacity-7">Branding
                                                  Specialist</span>
                                          </div>
                                      </div>
                                      <div class="text pb-30 mb-30 bord-thin-bottom">
                                          <h5 class="sub-font fw-400">Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats. Integer, tempus
                                              semper
                                              our has been lecto. Nam ultricies sed leo eget vehi.
                                              Sed
                                              variu noni magna quistoli mats.</h5>
                                      </div>
                                      <div class="botm">
                                          <span class="sub-font opacity-7 mb-5">Average 5.00
                                              ratting</span>
                                          <div class="icon-img-90">
                                              <img src="{{ asset('open') }}/imgs/vector-img/star.svg" alt="">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-pagination"></div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- ==================== End Testimonials ==================== -->


<!-- page title -->
<section class="section section--first">
  <div class="container">
    <div class="row">
      <!-- section title -->
      <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <h1 class="section__title section__title--page">Services</h1>
        <p class="section__text"></p>
      </div>
      <!-- end section title -->
    </div>
  </div>

  <!-- particles -->
  <div id="canvas" class="section__particles"><canvas class="vanta-canvas"
      style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 100%; height: 291px;" width="1351"
      height="291"></canvas></div>
  <!-- end particles -->
</section>
<!-- end page title -->

<!-- services -->
<section class="section">
  <div class="container">
    <div class="row row--grid">
      @foreach ($services as $service)
      <div class="col-12 col-md-6 col-xl-3">
        <!-- service -->
        <div class="service">
          {{-- <i class="ti-bolt"></i> --}}
          <img src="{{ asset($service->image) }}" class="img-rounded" style="border-radius: 8px" alt="">
          <h3 class="service__title">{{ $service->title }}</h3>
          <p class="service__text">{{ $service->sub_title }}...</p>
          <a href="{{ route('news.signle', ['id' => $service->id]) }}" class="btn text-uppercase">Learn More</a>
        </div>
        <!-- end service -->
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- end services -->

<!-- video -->
<div class="section section--bg" data-bg="{{ asset('img/12.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- section title -->
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <a class="section__video" href="https://vimeo.com/45830194"><i class="ti-control-play"></i></a>
          <p class="section__text section__text--white section__text--head">Check out our mining farm setup. To bring
            you the best we must hire the best.</p>
        </div>
        <!-- end section title -->
      </div>
    </div>
  </div>
</div>
<!-- end video -->

<!-- get started -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <!-- review -->
        <div class="review">
          <blockquote class="review__blockquote">«Joining {{ config('settings.site.name') }} has been a game-changer for
            my crypto mining endeavors. Their platform is user-friendly, their support team is incredibly helpful, and
            I've seen significant returns on my investment. I highly recommend {{ config('settings.site.name') }} to
            anyone looking to dive into the world of crypto mining.»</blockquote>
          <span class="review__autor">Sarah Johnson
            <span>Financial Analyst</span>
          </span>
        </div>
        <!-- end review -->
      </div>

      <div class="col-12 col-lg-6">
        <!-- get started -->
        <div class="get-started">
          <h3 class="get-started__title">Create Account</h3>
          <p class="get-started__text">Unlock the potential of crypto mining and start your journey to financial growth
            by creating an account with {{ config('settings.site.name') }} today!</p>
          <a href="{{ route('register') }}" class="btn">get started</a>
        </div>
        <!-- end get started -->
      </div>
    </div>
  </div>
</section>
<!-- end get started -->

<x-Widgets.Review-Slider />

@endsection