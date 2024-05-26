@extends('layouts.app', ['title' => 'About Us'])

@section('content')
<!-- ==================== Start Header ==================== -->

<div class="about-header bg-img" data-background="{{ asset('img/3.webp') }}"></div>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start intro ==================== -->

<section class="hero-dark light-ver section-padding">
    <div class="container position-re">
        <div class="row">
            <div class="col-lg-6">
                <div class="cont">
                    <h6 class="md-title mb-15">// About History</h6>
                    <p style="font-size: 18px; font-weight: 400">{{ config('main.site.name') }} is a leading energy investment company dedicated to transforming the energy landscape through strategic investments in clean and sustainable energy solutions. Our primary focus is on identifying and supporting innovative energy projects that offer both environmental benefits and attractive financial returns.</p>
                </div>
            </div>
            <div class="col-lg-2 d-flex justify-content-end align-items-end">
                <div>
                    <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-lg-5">
                <div class="img mr-30">
                    <img src="{{ asset('img/p-2.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="text mt-30">
                    <p>Choose {{ config('main.site.name') }} as your energy company for unparalleled expertise, reliability, and commitment to sustainability. With years of industry experience, {{ config('main.site.name') }} is a trusted leader in the energy sector, offering innovative solutions tailored to meet your needs. Our dedication to clean energy technologies ensures that we provide efficient and eco-friendly services that reduce environmental impact while maximizing energy efficiency. By partnering with {{ config('main.site.name') }}, you gain access to cutting-edge technology, personalized service, and a proven track record of delivering exceptional results. Join us in shaping a greener, more sustainable future for generations to come.</p>
                </div>
                <div class="mt-40">
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
        </div>
        <div class="circle-img-bord fit-img">
            <img src="{{ asset('img/12.jpg') }}" alt="">
        </div>
    </div>
</section>

{{-- @include('layouts.widgets.clients') --}}

<!-- ==================== End intro ==================== -->



<!-- ==================== Start Services ==================== -->

<x-Widgets.Review-Slider />

<!-- ==================== End Services ==================== -->



<!-- ==================== Start Services ==================== -->

<section class="services-modern bg-blck">
    <div class="container section-padding position-re">
        <div class="sec-head mb-80">
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="mb-15">// Best Of work Services</h6>
                    <h2 class="fw-700">{{ config('main.site.name') }} Ideas Service.</h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    <div class="head-cont">
                        <div class="icon-img-60 icon mb-80">
                            <img src="assets/imgs/vector-img/plus-light.svg" alt="">
                        </div>
                        <a href="#0">
                            <span class="text mr-15">View All Service</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="8"
                                    viewBox="0 0 19 8" fill="none">
                                    <path
                                        d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
                                        stroke="#fff" />
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                @foreach ($services as $key => $service)
                <div class="item mb-30">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="num">{{ $key < 9 ? "0". $key+1 : $key+1 }}.</span>
                        </div>
                        <div class="col-md-6">
                            <div class="cont">
                                <h5>{{ $service->title }}</h5>
                                <p>{{ $service->sub_title }}</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <div>
                                <a href="{{ route('news.signle', ['id' => $service->id]) }}" class="arrow">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
                                            viewBox="0 0 37 36" fill="none">
                                            <path
                                                d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
                                                stroke="#fff" stroke-width="2"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="img fit-img">
                        <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="intro-img">
            <img src="{{ asset('open') }}/imgs/hero/intro-seo.png" alt="">
        </div>
    </div>
</section>

<!-- ==================== End Services ==================== -->

<!-- ==================== Start Team ==================== -->

<x-Widgets.Team-Slider />

<!-- ==================== End Team ==================== -->

<!-- ==================== Start FAQS ==================== -->

<x-Widgets.FAQs />

<!-- ==================== End FAQS ==================== -->

<!-- ==================== Start Numbers ==================== -->

<section class="numbers section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item md-mb30">
                    <div>
                        <h3>5K</h3>
                        <div>
                            <span class="icon">
                                <i class="ti-plus"></i>art
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
</section>

<!-- ==================== End Numbers ==================== -->
@endsection