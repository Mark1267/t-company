@extends('layouts.app', ['title' => 'Contact Us'])

@section('content')
    <!--page header section start-->
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">Contact Us</h1>
                        <p class="lead">We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--our contact promo start-->
    <section class="promo-section pt-100 ">
        <div class="container">
            <div class="row justify-content-md-center justify-content-sm-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card single-promo-card text-center p-3 my-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-envelope icon-size-lg color-primary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Mail Us</h5>
                                <p class="mb-0">Say something to start a live chat {{ config('settings.site.email.support') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card single-promo-card text-center p-3 my-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-headset icon-size-lg color-primary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>24/7 Live Chat</h5>
                                <p class="mb-0">We endeavour to answer all enquiries within 24 hours on business days.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card single-promo-card text-center p-3 my-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <span class="fas fa-map-marker-alt icon-size-lg color-primary"></span>
                            </div>
                            <div class="pt-2 pb-3">
                                <h5>Visit Us</h5>
                                <p class="mb-0">{{ config('settings.site.address.full') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--our contact promo end-->

    <!--our contact section start-->
    <section class="contact-us-section ptb-100" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="contact-us-form-wrap gray-light-bg position-relative">
                        <form action="{{ route('contact.save') }}" method="POST" id="contactForm" class="contact-us-form">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-9 col-12">
                                    <h5 class="mb-3">Send Us a Message</h5>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-9 col-12">
                                    <div class="mb-4">
                                        <textarea name="message" id="message" class="form-control w-100 h-100" rows="5" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-primary" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="contact-us-content primary-bg text-white shadow-lg mt-5 mt-md-0 mt-lg-0">
                            <h3 class="text-white">
                                Looking for a excellent Business idea?
                            </h3>
                            <p>Drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>
                            <ul class="contact-info-list mt-3">
                                <li class="d-flex py-3">
                                    <div class="contact-icon me-3">
                                        <span class="fas fa-location-arrow text-tertiary"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h6 class="mb-1 text-white font-weight-normal">
                                            Our Location
                                        </h6>
                                        <small> {{ config('settings.site.address.full') }} </small>
                                    </div>
                                </li>
                                <li class="d-flex py-3">
                                    <div class="contact-icon me-3">
                                        <span class="fas fa-envelope text-tertiary"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h6 class="mb-1 text-white font-weight-normal">
                                            Email Address
                                        </h6>
                                        <small> {{ config('settings.site.email.support') }} </small>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
                                <li class="list-inline-item">
                                    <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our contact section end-->

    <!--google map start-->
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450937!2d144.953735315922!3d-37.817323442021234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1571030260624!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--google map end-->


    <x-Widgets.Review-Slider />
@endsection