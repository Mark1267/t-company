<!--News & Thoughts-->
<section id="news" class="padding light layout_third">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center wow fadeInDown">
          <h2 class="bottom10 text-capitalize">News & <span class="blue_t">Thoughts </span></h2>
        </div>
      </div>
      <div class="row">
        <div id="news_slider1" class="owl-carousel">
          @foreach ($posts() as $post)
            <div class="item">
              <div class="news">
                <div class="image">
                    <img width="100px" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                </div>
                <div class="news_text">
                  <h4 class="bottom10"><a href="{{ route('news.signle', ['id' => $post->id]) }}">{{ $post->title }}</a></h4>
                  <ul class="news_crumb">
                    <li><a href="#.">Admin</a></li>
                    <li><a href="#.">{{ date('F j', strtotime($post->created_at)) }}</a></li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  </section>
  <!--News & Thought ends-->