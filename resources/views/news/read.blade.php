@extends('layouts.app', ['title' => $post->title])

@section('content')

<!-- ==================== Start Header ==================== -->

<header class="page-header section-padding sub-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="caption">
					<h1>Blog Details</h1>
					<div class="row mt-30">
						<div class="col-lg-5 col-md-6">
							<div class="d-flex align-items-center">
								<div>
									<div class="icon-img-80">
										<img src="{{ asset('open') }}/imgs/vector-img/Vector.svg" alt="">
									</div>
								</div>
								<div class="text ml-30">
									<span class="p-style">{{ $post->title }}: {{ $post->sub_title }}</span>
								</div>
							</div>
						</div>
						<div class="col-lg-6 offset-lg-1 col-md-6 valign">
							<div class="d-flex align-items-center">
								<div class="long-arw mr-30">
									<img src="{{ asset('open') }}/imgs/vector-img/long-arrow.svg" alt="">
								</div>
								<div class="fw-500 sub-font">
									<span class="opacity-7">
										<a href="{{ route('news.all') }}">Home</a>
									</span>
									<span class="ml-10 mr-10">/</span>
									<span>{{ $post->title }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="col-lg-3 d-flex align-items-center justify-content-end">
				<div class="img-circle">
					<img src="{{ asset('open') }}/imgs/header/Circle.svg" alt="">
				</div>
			</div> --}}
		</div>
	</div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start Blog ==================== -->

<section class="blogs section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="main-post">
					<div class="blog">
						<div class="item mb-30 pb-30 bord-thin-bottom">
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
								<h5 class="fw-700">{{ $post->title }}</h5>
							</div>
						</div>
					</div>
					<div class="text">
						{!! $post->body !!}
					</div>
					<div class="tags mt-50">
						<span class="mr-10 fw-700 fz-14">Tags Here :</span>
						{{-- <a href="#0">Creative</a>
						<a href="#0">Consultant</a>
						<a href="#0">Business</a>
						<a href="#0">UX/UI Designer</a> --}}
					</div>
					<div class="author sub-bg d-flex align-items-center mt-40">
						<div>
							<div class="img-author fit-img">
								<img src="{{ asset(config('main.site.logo.full')) }}" alt="{{ $post->title }}">
							</div>
						</div>
						<div class="info ml-40">
							<h6 class="mb-10">Administrator</h6>
						</div>
						<div class="social">
							<a href="#0"><i class="fab fa-facebook-f"></i></a>
							<a href="#0"><i class="fab fa-linkedin-in"></i></a>
							<a href="#0"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
				</div>
				<div class="blog section-padding">
					<div class="sec-head mb-80">
						<div class="row">
							<div class="col-md-8">
								<h6 class="mb-15 fw-500">// Related News & Blogs</h6>
								<h2 class="fw-700">We solution Related News & Blogs</h2>
							</div>
							<div class="col-md-4 d-flex align-items-center justify-content-end">
								<div class="head-cont">
									<div class="icon-img-60 icon mb-80">
										<img src="{{ asset('open') }}/imgs/vector-img/plus.svg" alt="">
									</div>
									<a href="{{ route('news.all') }}">
										<span class="text mr-15">View All Posts</span>
										<span><svg xmlns="http://www.w3.org/2000/svg" width="19"
												height="8" viewBox="0 0 19 8" fill="none">
												<path
													d="M0.100505 0.899495L17.4853 0.899495C18.3762 0.899495 18.8224 1.97664 18.1924 2.6066L13.8184 6.98061L11.9799 5.14214"
													stroke="#141414" />
											</svg></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						@foreach ($related as $post)
							<div class="col-md-3">
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
												<svg xmlns="http://www.w3.org/2000/svg" width="37"
													height="36" viewBox="0 0 37 36" fill="none">
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
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="widget">
						<h6 class="title-widget">Search Here</h6>
						<div class="search-box">
							<input type="text" name="search-post" placeholder="Search">
							<span class="icon pe-7s-search"></span>
						</div>
					</div>
					<div class="widget catogry">
						<h6 class="title-widget">Our Blog Categories List</h6>
						<ul class="rest">
							@foreach ($cats as $cat)
								<li>
									<span><a href="{{ route('news.by.category', ['category_id' => $cat->id]) }}">{{ $cat->title }}</a></span>
									<span class="ml-auto">{{ $cat->post_count }}</span>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ==================== End Blog ==================== -->
@endsection