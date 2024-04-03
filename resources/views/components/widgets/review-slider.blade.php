<!-- testimonials -->
<section class="section section--blue">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h2 class="section__title">Client Testimonials</h2>
                <p class="section__text">What 100% real people say about us</p>
            </div>
            <!-- end section title -->
        </div>
    </div>

    <!-- testimonials slider -->
    <div class="owl-carousel testimonial-slider testimonial-slider--blue">
      @foreach ($reviews() as $review)
        <div class="item">
          <div class="testimonial">
            <div class="testimonial__text">
                <p>«{{ $review->review }}»</p>
            </div>

            <div class="testimonial__client">
                <img src="{{ $review->image }}" alt="{{ $review->name }}">
                <p>{{ $review->name }}</p>
                <span>{{ $review->rank }}</span>
            </div>
          </div>
        </div>
      @endforeach
        {{-- <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transition: all 0.8s ease 0s; width: 4180px; transform: translate3d(-639px, 0px, 0px);">
                <div class="owl-item cloned" style="width: auto; margin-right: 30px;">
                    
                </div>
                <div class="owl-item cloned" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user4.jpg" alt="">
                            <p>Brian Cranston</p>
                            <span>Washington, USA</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned active" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user5.jpg" alt="">
                            <p>Matt Jones</p>
                            <span>Sydney, Australia</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item active center" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures, to generate Lorem Ipsum which looks reasonable.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user1.jpg" alt="">
                            <p>Gene Graham</p>
                            <span>New York, USA</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user2.jpg" alt="">
                            <p>Rosa Lee</p>
                            <span>Paris, France</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator on the Internet.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user3.jpg" alt="">
                            <p>Tess Harper</p>
                            <span>Ha Noi, Vietnam</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user4.jpg" alt="">
                            <p>Brian Cranston</p>
                            <span>Washington, USA</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user5.jpg" alt="">
                            <p>Matt Jones</p>
                            <span>Sydney, Australia</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                                structures, to generate Lorem Ipsum which looks reasonable.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user1.jpg" alt="">
                            <p>Gene Graham</p>
                            <span>New York, USA</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user2.jpg" alt="">
                            <p>Rosa Lee</p>
                            <span>Paris, France</span>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: auto; margin-right: 30px;">
                    <div class="testimonial">
                        <div class="testimonial__text">
                            <p>«All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator on the Internet.»</p>
                        </div>

                        <div class="testimonial__client">
                            <img src="./SmartMine – Crypto Mining HTML Template_files/user3.jpg" alt="">
                            <p>Tess Harper</p>
                            <span>Ha Noi, Vietnam</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                class="owl-next"><span aria-label="Next">›</span></button></div>
        <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button>
        </div> --}}
    </div>
    <!-- end testimonials slider -->
</section>
<!-- end testimonials -->
{{-- <!--People Saying-->
<section id="people" class="padding"
    style="background-image: url({{ asset('img/6.jpg') }}); background-position: center center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInDown">
                <h2 class="bottom10 text-capitalize text-white">What people are <span class="blue_t">Saying</span>
                </h2>
                <p class="heading_space text-white">We are trusted by thousands of users across the globe. Our mission
                    is to provide quality guidance, build relationships of trust, and develop
                    innovative solutions for our clients.</p>
            </div>
        </div>
        <div id="people_slider" class="owl-carousel">

            @foreach ($reviews() as $review)
                <div class="item">
                    <div class="people_wrap border_radius left">
                        <i class="icon-quotes-right"></i>
                        <p class="" style="color: black">{{ $review->review }}</p>
                    </div>
                    <div class="testinomial_pic">
                        <div class="pic"><img width="50px" style="border-radius: 1000px" alt="testinomial"
                                src="{{ $review->image }}"></div>
                        <div class="testinomial_body">
                            <span class="name text-white">{{ $review->name }}</span>
                            <span class="post_img  text-white">{{ $review->rank }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--People Saying ends--> --}}
