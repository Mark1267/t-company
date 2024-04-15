@extends('layouts.app', ['title' => 'Our News'])

@section('content')

<!-- ==================== Start Header ==================== -->

<header class="page-header mt-5 section-padding sub-bg">
  <div class="container">
      <div class="row">
          <div class="col-lg-9">
              <div class="caption">
                  <h1>Blog Page</h1>
                  <div class="row mt-30">
                      <div class="col-lg-5 col-md-6">
                          <div class="d-flex align-items-center">
                              <div>
                                  <div class="icon-img-80">
                                      <img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
                                  </div>
                              </div>
                              <div class="text ml-30">
                                  <span class="p-style">Nunc id elit vitae augue mattis laoreet. Sed
                                      ac commodo velit, tristique pulvinar.</span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 offset-lg-1 col-md-6 valign">
                          <div class="d-flex align-items-center">
                              <div class="long-arw mr-30">
                                  <img src="assets/imgs/vector-img/long-arrow.svg" alt="">
                              </div>
                              <div class="fw-500 sub-font">
                                  <span class="opacity-7">
                                      <a href="#0">Home</a>
                                  </span>
                                  <span class="ml-10 mr-10">/</span>
                                  <span>Blogs Page</span>
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



<!-- ==================== Start Blog ==================== -->

<section class="blog section-padding">
  <div class="container">
      <div class="row">
        @foreach ($posts as $post)
          <div class="col-lg-4 col-md-6">
              <div class="item mb-30">
                  <div class="img fit-img">
                      <img src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                  </div>
                  <div class="cont mt-20">
                      <div class="info d-flex align-items-center p-style mb-20">
                          <div class="date">
                              <span class="icon ti-calendar"></span>
                              <span class="opacity-8 ml-10">{{ date('F j Y', strtotime($post->created_at)) }}</span>
                          </div>
                          <div class="author ml-40">
                              <span>by.</span>
                              <span class="opacity-8 ml-10">Admin</span>
                          </div>
                      </div>
                      <h5 class="fw-700">
                          <a href="{{ route('news.signle', ['id' => $post->id]) }}">{{ $post->title }}</a>
                      </h5>
                      <div class="view fw-700 mt-30 pt-30 bord-thin-top">
                          <a href="{{ route('news.signle', ['id' => $post->id]) }}">
                              <span>Read More</span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36"
                                  viewBox="0 0 37 36" fill="none">
                                  <path
                                      d="M1 35L34.2929 1.70711C34.9229 1.07714 36 1.52331 36 2.41421V21.5H29.5"
                                      stroke="#141414" stroke-width="2"></path>
                              </svg>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  {{-- <div class="pagination mt-20">
      <div class="container">
          <div class="d-flex align-items-center justify-content-center">
              <div>
                  <a href="#0" class="numb">01</a>
                  <a href="#0" class="numb active">02</a>
                  <a href="#0" class="numb">03</a>
                  <a href="#0" class="numb">04</a>
                  <a href="#0" class="numb">05</a>
              </div>
          </div>
      </div>
  </div> --}}
  <div class="pagination mt-20">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <div>
          @foreach ($posts->links() as $link)
            <a href="{{ $link->url }}" class="numb @if ($link->isActive()) active @endif">{{ $link->label }}</a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== End Blog ==================== -->

@endsection