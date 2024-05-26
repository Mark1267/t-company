<!-- ==================== Start Testimonials ==================== -->

<section class="testimonials section-padding pt-0">
    <div class="container">
        <div class="sec-head mb-80">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h6 class="mb-15">// Our Testimonials</h6>
                        <h3 class="fw-700">What People Says About {{ config('settings.site.name') }}</h3>
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
                            @foreach ($reviews() as $review)
                            <div class="swiper-slide">
                                <div class="item">
                                    <div class="content">
                                        <div class="info d-flex align-items-center mb-25">
                                            <div>
                                                <div class="fit-img circle">
                                                    <img src="{{ $review->image }}" alt="{{ $review->name }}">
                                                </div>
                                            </div>
                                            <div class="ml-20">
                                                <h5 class="fw-700">{{ $review->name }}</h5>
                                                <span class="sub-font opacity-7">{{ $review->rank }}</span>
                                            </div>
                                        </div>
                                        <div class="text pb-30 mb-30 bord-thin-bottom">
                                            <h5 class="sub-font fw-400">{{ $review->review }}</h5>
                                        </div>
                                        <div class="botm">
                                            <span class="sub-font opacity-7 mb-5">Average {{ $review->stars }} ratting</span>
                                            <div class="icon-img-90">
                                                <img src="{{ asset('open') }}/imgs/vector-img/star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
  </section>
  
  <!-- ==================== End Testimonials ==================== -->