<!-- faq -->
<section class="section section--border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                @foreach ($faqs() as $key => $faq)
                    <div class="faq">
                        <h3 class="faq__title">{{ $faq->question }}</h3>
                        <p class="faq__text">{{ $faq->answer }}</p>
                    </div>
                @endforeach

                {{-- <div class="faq">
                    <h3 class="faq__title">When and how do you get paid?</h3>
                    <p class="faq__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">How much can you earn?</h3>
                    <p class="faq__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">What is the service fee for sellers?</h3>
                    <p class="faq__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">What is the PPS reward system?</h3>
                    <p class="faq__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div> --}}
            </div>

            {{-- <div class="col-12 col-md-6">
                <div class="faq">
                    <h3 class="faq__title">Which Stratum servers are available?</h3>
                    <p class="faq__text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">Where can you see your mining status?</h3>
                    <p class="faq__text">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">Why are you getting rejected shares?</h3>
                    <p class="faq__text">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">What happens when there are no orders?</h3>
                    <p class="faq__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>

                <div class="faq">
                    <h3 class="faq__title">Which miners are supported?</h3>
                    <p class="faq__text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- end faq -->

{{-- <!--FAQ-->
<section id="faq" class="padding-top padding-bottom-half">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion-container">
                    @foreach ($faqs() as $key => $faq)
                        <div class="accordion_title">
                            <a href="javascript:void(0)" class="{{ $key == 0 ? 'active' : '' }}">
                                {{ $faq->question }}<i class="fa fa-minus"></i>
                            </a>
                            <div class="content" {{ $key == 0 ? 'style="display:block;"' : '' }}>
                                <p class="bottom20">{{ $faq->answer }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ ends --> --}}