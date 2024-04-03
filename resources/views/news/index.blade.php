@extends('layouts.app', ['title' => 'Our News'])

@section('content')

<!-- page title -->
<section class="section section--first">
  <div class="container">
    <div class="row">
      <!-- section title -->
      <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <h1 class="section__title section__title--page">Keep Reading</h1>
        <p class="section__text">Welcome to blog</p>
      </div>
      <!-- end section title -->
    </div>
  </div>

  <!-- particles -->
  <div id="canvas" class="section__particles"><canvas class="vanta-canvas"
      style="position: absolute; z-index: 0; top: 0px; left: 0px; width: 1351px; height: 263px;" width="1351"
      height="263"></canvas></div>
  <!-- end particles -->
</section>
<!-- end page title -->

<!-- blog -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <!-- sidebar -->
          <x-Widgets.Blog-Sidebar />
          <!-- end sidebar -->

          <!-- content -->
          <div class="col-12 col-lg-8 order-lg-4">
            @foreach ($posts as $post)
              <!-- post -->
              <article class="post">
                <figure class="post__img">
                  <img src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                </figure>

                <header class="post__header">
                  <span class="post__date">{{ date('F j', strtotime($post->created_at)) }} · {{ rand(1,10) }} min read</span>
                  <a href="{{ route('news.signle', ['id' => $post->id]) }}"
                    class="post__category post__category--green">{{ $post->category->title }}</a>
                  <h2 class="post__title"><a href="{{ route('news.signle', ['id' => $post->id]) }}">{{ $post->title }}
                    {{ $post->title }}</a></h2>
                </header>

                <div class="post__content">
                  <p>{{ $post->sub_title }}...</p>
                </div>

                <div class="post__author">
                  <img src="{{ asset(config('settings.site.logo.favi')) }}" alt="">
                  <h6>{{ $post->user->full_name }}</h6>
                  <span>Admin</span>
                </div>

                <a href="{{ route('news.signle', ['id' => $post->id]) }}" class="post__more">Read more</a>
              </article>
              <!-- end post -->
            @endforeach

            {{-- <!-- post -->
            <article class="post">
              <figure class="post__img">
                <img src="./SmartMine – Crypto Mining HTML Template_files/blog.jpg" alt="">
              </figure>

              <header class="post__header">
                <span class="post__date">March 23 · 6 min read</span>
                <a href="https://smartmine.volkovdesign.com/blog.html#"
                  class="post__category post__category--red">Mining</a>
                <h2 class="post__title"><a href="https://smartmine.volkovdesign.com/article.html">Bitcoin mining
                    equipment</a></h2>
              </header>

              <div class="post__content">
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                  text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                  versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
              </div>

              <div class="post__author">
                <img src="./SmartMine – Crypto Mining HTML Template_files/user2.jpg" alt="">
                <h6>Kara Doe</h6>
                <span>CVO</span>
              </div>

              <a href="https://smartmine.volkovdesign.com/article.html" class="post__more">Read more</a>
            </article>
            <!-- end post -->

            <!-- post -->
            <article class="post">
              <figure class="post__img">
                <img src="./SmartMine – Crypto Mining HTML Template_files/blog2.jpg" alt="">
              </figure>

              <header class="post__header">
                <span class="post__date">March 17 · 9 min read</span>
                <a href="https://smartmine.volkovdesign.com/blog.html#"
                  class="post__category post__category--yellow">Services</a>
                <h2 class="post__title"><a href="https://smartmine.volkovdesign.com/article.html">Crypto mining
                    platform</a></h2>
              </header>

              <div class="post__content">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. Various versions have evolved over the years, sometimes by accident.</p>
              </div>

              <div class="post__author">
                <img src="./SmartMine – Crypto Mining HTML Template_files/user.svg" alt="">
                <h6>John Doe</h6>
                <span>CEO &amp; Founder</span>
              </div>

              <a href="https://smartmine.volkovdesign.com/article.html" class="post__more">Read more</a>
            </article>
            <!-- end post --> --}}

            <!-- paginator -->
            {{ $posts->links() }}
            <!-- end paginator -->
          </div>
          <!-- end content -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end blog -->
{{-- 
<!-- Page Title -->
<section class="page_header" style="background-image: url({{ asset('assets/open/images/assets.jpg') }}) !important;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <p>News / Blog</p>
        <h1 class="text-uppercase">latest News</h1>
      </div>
    </div>
  </div>
</section>
<div class="page_linker">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <ul class="breadcrumb">
          <li><a href="{{ route('home') }}"><i class="icon-home6"></i>Home</a></li>
          <li class="active">Blog</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!--Blog/ News-->
<section id="blog" class="padding-top">
  <div class="container">
    <div class="row">
      <style>
        .blog_item {
          width: 100%;
          display: flex;
        }

        .media-body {
          width: 100%;
        }
      </style>
      <div class="col-sm-9 bottom40">
        @foreach ($posts as $post)
        <div class="blog_item media heading_space">
          <div class="media-left">
            <a href="{{ route('news.signle', ['id' => $post->id]) }}">
              <img class="media-object my-auto" width="300px" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
            </a>
          </div>
          <div class="media-body" style="word-wrap: break-word;">
            <h3><a href="{{ route('news.signle', ['id' => $post->id]) }}">
                {{ $post->title }}
              </a></h3>
            <ul class="blog_date bottom30">
              <li><a href="javascript:void(0)">
                  {{ $post->category->title }}
                </a></li>
              <li><a href="javascript:void(0)">
                  {{ date('F j', strtotime($post->created_at)) }}
                </a></li>
            </ul>
            <span class="bottom30">
              {{ $post->sub_title }}...
            </span>
            <a href="{{ route('news.signle', ['id' => $post->id]) }}" class="text-uppercase continue">Continue
              Reading</a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            {{ $posts->links() }}
          </div>
        </div>
        @endforeach
      </div>
      <x-Widgets.Blog-Sidebar />
    </div>
  </div>
</section>
@endsection --}}