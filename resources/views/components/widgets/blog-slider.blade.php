<section class="blog section-padding pb-80">
	<div class="container">
		<div class="sec-head mb-80">
			<div class="row">
				<div class="col-lg-6">
					<h6 class="mb-15 wow fadeInUp" data-wow-delay="0.4s">// Our Latest News & Blogs</h6>
					<h2 class="fw-700 js-splittext-lines">We solution with the Our Latest News & Blogs</h2>
				</div>
				<div class="col-lg-6 d-flex align-items-center justify-content-end">
					<div class="head-cont">
						<div class="icon-img-60 icon mb-80">
							<img src="{{ asset('open') }}/imgs/vector-img/plus.svg" alt="">
						</div>
						<a href="{{ route('news.all') }}">
							<span class="text mr-15">View All Posts</span>
							<span><svg xmlns="http://www.w3.org/2000/svg" width="19" height="8"
									viewBox="0 0 19 8" fill="none">
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
      @foreach ($posts() as $key => $post)
			<div class="col-lg-4">
				<div class="item md-mb50 wow fadeInUp" data-wow-delay="{{ 0.4 + (0.2*($key+1)) }}s">
					<div class="img fit-img">
						<img src="{{ asset($post->image) }}" alt="{{ $post->title }}">
					</div>
					<div class="cont mt-20">
						<div class="info d-flex align-items-center p-style mb-20">
							<div class="date">
								<span class="icon ti-calendar"></span>
								<span class="opacity-8 ml-10">{{ date('F j', strtotime($post->created_at)) }}</span>
							</div>
							<div class="author ml-40">
								<span>by.</span>
								<span class="opacity-8 ml-10">Administrator</span>
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
</section>