@extends('layouts.app', ['title' => $post->title])

@section('content')


	<!-- article -->
	<div class="section section--first section--border-top section--border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
					<div class="article">
						<div class="article__header">
							<a href="{{ route('news.by.category', ['category_id' => $post->category->id]) }}" class="article__category article__category--green">{{ $post->category->title }}</a>
							<span class="article__date">{{ date('F j', strtotime($post->created_at)) }} · {{ rand(1, 10) }} min read</span>
						</div>

						<div class="article__author">
							<img src="{{ asset(config('settings.site.logo.favi')) }}" alt="">
							<h6>{{ $post->user->full_name }}</h6>
							<span>Admin</span>
						</div>

						<!-- article content -->
						<div class="article__content">
							<img src="{{ asset($post->image) }}" alt="">
							{!! $post->body !!}
						</div>
						<!-- end article content -->

						<!-- article social -->
						<div class="article__social">
							<a class="article__social-btn article__social-btn--fb" href="#"><i class="ti-facebook"></i><span>share</span></a>
							<a class="article__social-btn article__social-btn--tw" href="#"><i class="ti-twitter-alt"></i><span>tweet</span></a>
						</div>
						<!-- end article social -->

						<!-- article navigation -->
						{{-- <div class="article__nav">
							<a href="https://smartmine.volkovdesign.com/article.html#">
								<span>Previous Post</span>
								<h6>There are many variations of passages</h6>
							</a>
							<a href="https://smartmine.volkovdesign.com/article.html#">
								<span>Next Post</span>
								<h6>The generated Lorem Ipsum is therefore</h6>
							</a>
						</div> --}}
						<!-- end article navigation -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end article -->

{{-- <!-- PAGE TITLE -->
<section class="page_header" style="background-image: url({{ asset($post->image) }}) !important;">
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
        <li> <a href="{{ route('news.all') }}"><i class="icon-prev"></i> Blog</a></li>
        <li class="active">{{ $post->title }}</li>
      </ul>
      </div>
    </div>
  </div>
</div>
<!-- PAGE TITLE ends -->


<!--BLOG DETAILS-->
<section id="blog" class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 bottom40">
        <div class="blog_item">
          <div class="blog_image bottom20">
             <img class="img-responsive" src="{{ asset($post->image) }}" alt="<?php echo $post['title']; ?>">
          </div>
          <h3>{{ $post->title }}</h3>
          <ul class="blog_date bottom15">
            <li><a href="javascript:void(0)">{{ $post->category->title }}</a></li>
            <li><a href="javascript:void(0)">{{ date('F j', strtotime($post->created_at)) }}</a></li>
          </ul>
          <div class="col-md-12" style="word-wrap: break-word;">
            {!! $post->body !!}
          </div>
        </div>
      </div>
      <x-Widgets.Blog-Sidebar />
    </div>
  </div>
</section>
<!--BLOG DETAILS ends--> --}}
@endsection