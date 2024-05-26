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
                  <p>We strive to exceed expectations and deliver exceptional value in every deal. {{ config('main.site.name') }} actively invests in a diverse portfolio of renewable energy projects, including solar farms, wind turbines, and hydroelectric power plants. These investments help accelerate the transition from fossil fuels to cleaner, more sustainable energy sources.</p>
                  <div class="row mt-40 pt-40 bord-thin-top">
                      <div class="col-md-6">
                          <div class="item d-flex align-items-center sm-mb30">
                              <div>
                                  <span class="icon-img-40 mr-30">
                                      <img src="{{ asset('open') }}/imgs/vector-img/boxs.svg" alt="">
                                  </span>
                              </div>
                              <h6>Funding Clean Technology Innovations</h6>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="item d-flex align-items-center">
                              <div>
                                  <span class="icon-img-40 mr-30">
                                      <img src="{{ asset('open') }}/imgs/vector-img/boxs.svg" alt="">
                                  </span>
                              </div>
                              <h6>Strategic Partnerships</h6>
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
                      <h3 class="fw-700">WHat we offer to Our Customers</h3>
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
  {{-- <div class="g-img">
      <img src="{{ asset('open') }}/imgs/vector-img/G2.svg" alt="">
  </div> --}}
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
                  <img src="{{ asset('img/PP-11.jpg') }}" alt="">
              </div>
          </div>
          <div class="col-lg-6 offset-lg-1 valign">
              <div class="clas-skills">
                  <h6 class="mb-15">// Why Choose Us</h6>
                  <h2 class="fw-700 mb-15" style="font-size: 22px">We have a longstanding history of successfully investing in renewable energy projects.</h2>
                  <h5 class="sub-font mb-10">Our team of experts brings deep knowledge and experience in the energy sector, ensuring that we identify and support the most promising clean energy initiatives.</h5>
                  <p>We are dedicated to driving the transition to a cleaner, greener future. Our investments are aligned with environmental sustainability goals, focusing on reducing carbon emissions and promoting renewable energy sources. </p>
                  <div class="skills-box mt-40">
                      <div class="skill-item mb-40">
                          <div class="skill-progress">
                              <div class="progres" data-value="100%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Proven Expertise in Clean Energy</span> <span class="ml-auto fz-14">1005%</span></h6>
                      </div>
                      <div class="skill-item mb-40">
                          <div class="skill-progress">
                              <div class="progres" data-value="100%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Commitment to Sustainability</span> <span class="ml-auto fz-14">100%</span></h6>
                      </div>
                      <div class="skill-item mb-40">
                          <div class="skill-progress">
                              <div class="progres" data-value="100%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Diverse Portfolio of Energy Assets</span> <span class="ml-auto fz-14">100%</span></h6>
                      </div>
                      <div class="skill-item">
                          <div class="skill-progress">
                              <div class="progres" data-value="100%"></div>
                          </div>
                          <h6 class="sub-font fz-16 mt-10 d-flex align-items-center"><span>Strategic Partnerships and Collaborations</span> <span class="ml-auto fz-14">100%</span></h6>
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



<x-Widgets.Review-Slider />

@endsection