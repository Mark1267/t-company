<section class="services section-padding pt-0">
    <div class="container">
        <div class="sec-head mb-80">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h6 class="mb-15">// Our Best Of Service</h6>
                        <h3 class="fw-700">What People Says About {{ config('settings.site.name') }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row md-marg">
            @foreach ($reviews() as $review)
                <div class="col-lg-4">
                    <div class="item text-center md-mb50">
                        <div class="icon">
                            <img src="{{ $review->image }}" width="150px" style="border-radius: 1000px; height: 150px; width: 150px;" alt="{{ $review->name }}">
                        </div>
                        <h5 class="fw-700">{{ $review->name }} <br> {{ $review->rank }}</h5>
                        <div class="text mt-15">
                            <p>{{ $review->review }}</p>
                        </div>
                        <a href="#0" class="arrow mt-40">
                            <span><svg width="34" height="13" viewBox="0 0 34 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.0294371 0.99986H31.5563C32.4473 0.99986 32.8934 2.077 32.2635 2.70697L23.5458 11.4246L20.3941 8.27296"
                                        stroke="#141414" stroke-width="2" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>