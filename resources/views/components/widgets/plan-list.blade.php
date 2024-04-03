<!-- pricing -->
<section class="section section--border-top">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h2 class="section__title">Current prices</h2>
                <p class="section__text">That guarantee you some hashing power.</p>
            </div>
            <!-- end section title -->
        </div>
    </div>
    @foreach ($categories() as $category)
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h2 class="section__title">{{ $category->title }}</h2>
                    <p class="section__text">{!! $category->body !!}</p>
                </div>
                <!-- end section title -->
            </div>

            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 col-xl-12 offset-xl-0">
                    <div class="price-wrap">
                        @foreach ($category->plans as $key => $plan)
                        <!-- price -->
                        <div class="price">
                            <h3 class="price__title">{{ $plan->name }}</h3>
                            <ul class="price__list">
                                <li><b>Rate:</b> {{ $plan->rate }}% MH/s</li>
                                <li>Min. Invest: ${{ $plan->min }}</li>
                                <li>Max. Invest: ${{ $plan->max }}</li>
                                {{-- <li><b>Equipment:</b> HashCoins SCRYPT</li> --}}
                                <li>ROI: <b>{{ $plan->time . ' ' . $plan->planTime->suffix }}</b></li>
                                <li><b>Mining Type:</b> {{ $plan->type ? 'Premier' : 'Standard' }}</li>
                                @if($plan->type)
                                    <li><b>Interval</b> : Every 1 {{ $plan->intervals->suffix }}</li>
                                @endif
                                <li>Automatic charging in BTC</li>
                                <li>10% Referral Bonus</li>
                                <li>24/7 Customer Care</li>
                            </ul>
                            <span class="price__value">${{ $plan->min }}</span>
                            <p class="price__text">for {{ $plan->rate }}%</p>
                            <button class="btn btn--border btn--center" onclick="window.location.href = '{{ route('register') }}'" type="button">Invest Now</button>
                        </div>
                        <!-- end price -->
                        @endforeach

                        {{-- <!-- price -->
                        <div class="price">
                            <h3 class="price__title">Medium</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 10 GH/s</li>
                                <li><b>Service pay:</b> 0.0035$ / 10 GH/s / 24h</li>
                                <li><b>Equipment:</b> HashCoins SHA-256</li>
                                <li>Automatic charging in BTC</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$5.20</span>
                            <p class="price__text">for 10 GH/s</p>
                            <button class="btn btn--border btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price -->

                        <!-- price -->
                        <div class="price price--best">
                            <h3 class="price__title">Large</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 100 KH/s</li>
                                <li><b>Service pay:</b> No</li>
                                <li><b>Equipment:</b> GPU Rigs</li>
                                <li>Automatic charging in ETH</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$7.70</span>
                            <p class="price__text">for 100 KH/s</p>
                            <button class="btn btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price -->

                        <!-- price -->
                        <div class="price">
                            <h3 class="price__title">Pro</h3>
                            <ul class="price__list">
                                <li><b>Minimal Hashedrate:</b> 1 MH/s</li>
                                <li><b>Service pay:</b> No</li>
                                <li><b>Equipment:</b> Multi-Factor</li>
                                <li>Automatic charging in DASH</li>
                                <li><b>1 year</b></li>
                            </ul>
                            <span class="price__value">$9.90</span>
                            <p class="price__text">for 1 MH/s</p>
                            <button class="btn btn--border btn--center" type="button">Buy now</button>
                        </div>
                        <!-- end price --> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
<!-- end pricing -->
{{-- 
<section id="team" class="pricesection padding-top padding-bottom-half bg-gradient-me">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInDown animated" data-wow-delay="500ms">
                <h2 class="bottom10 text-capitalize text-white">Our Investment <span class="blue_t">Plans</span></h2>
                <p class="heading_space text-white">We are trusted by thousands of investors across the globe.</p>
            </div>
        </div>
    </div>
    <style>
        .cat *{
            color: white !important;
        }
    </style>
    
    @foreach ($categories() as $category)
        <div class="container">
            <div class="row cat">
                <div class="col-sm-12 text-center text-white wow fadeInDown animated" data-wow-delay="500ms">
                    <h2 class="bottom10 text-capitalize text-white">{{ $category->title }}</h2>
                    <p class="heading_space text-white" style="color: white">{!! $category->body !!}</p>
                </div>
            </div>
        </div>
        <div class="pricing pricing-palden">
            @foreach ($category->plans as $key => $plan)
                <div class="pricing-item" style="margin-right: 1.5rem; margin-left: 1.5rem">
                    <div class="pricing-deco">
                        <svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                            <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                                H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                        </svg>
                        <div class="pricing-price ">
                            {{ $plan->rate }}%
                        </div>
                        <h3 class="pricing-title">Profit</h3>
                        <h3 class="pricing-title">{{ $plan->name }}</h3>
                    </div>
                    <ul class="pricing-feature-list " style="padding-top: -100px !important;">
                        <li class="pricing-feature">Min. Investment: ${{ $plan->min }}</li>
                        <li class="pricing-feature"> Max. Investment: ${{ $plan->max }}</li>
                        <li class="pricing-feature"> ROI after {{ $plan->time . ' ' . $plan->planTime->suffix }} </li>
                        <li class="pricing-feature">Type : {{ $plan->type ? 'Premier' : 'Standard' }} Plan</li>
                        @if($plan->type)
                            <li class="pricing-feature">Interval : Every 1 {{ $plan->intervals->suffix }}</li>
                        @endif
                        <li class="pricing-feature">10% Referral Bonus</li>
                        <li class="pricing-feature">24/7 Customer Care</li>
                    </ul>
                    <button style="cursor: pointer;" onclick="window.location.href = '{{ route('register') }}'" class="pricing-action">Get Started</button>
                </div>
            @endforeach
        </div>
    @endforeach
</section> --}}