
<div class="col-12 col-lg-4 order-lg-8">
    <div class="sidebar">
      <form action="#" class="sidebar__search">
        <input type="text" class="form__input" placeholder="Search">
        <button type="button"><i class="ti-search"></i></button>
      </form>

      <span class="sidebar__title">Categories</span>

      <ul class="sidebar__list">
        @foreach($categories() as $category)
            <li><a href="{{ route('news.by.category', ['category_id' => $category->id]) }}" class="orange">{{ $category->title }} ({{ $category->post_count }})</a></li>
        @endforeach
      </ul>
    </div>

    <div class="sidebar sidebar--desk">
      <ul class="sidebar__posts">
        @foreach($latests() as $latest_post)
        <li>
          <a href="{{ route('news.signle', ['id' => $latest_post->id]) }}">{{ $latest_post->title }}</a>
          <span> {{ date('F j', strtotime($latest_post->created_at)) }} · {{ rand(1,10) }} min read</span>
        </li>
        @endforeach
      </ul>
    </div>
  </div>

{{-- <aside class="col-sm-3">
    <div class="widget heading_space">
        <form class="widget_search border-radius">
            <div class="input-group">
                <input class="form-control" type="search" required placeholder="Search Here">
                <i class="input-group-addon icon-search5"></i>
            </div>
        </form>
    </div>
    <div class="widget heading_space">
        <h4 class="bottom10">Blog Posts</h4>
        @foreach($latests() as $latest_post)
        <div class="single_post bottom15">
            <a href="{{ route('news.signle', ['id' => $latest_post->id]) }}" class="post">
                <img
                    class="img-responsive"
                    src="{{ asset($latest_post->image) }}"
                    alt="{{ $latest_post->title }}">
            </a>
            <div class="text col-12" style="display: block;">
                <a href="{{ route('news.signle', ['id' => $latest_post->id]) }}">
                    {{ $latest_post->title }}
                </a>
                <p>
                    {{ date('F j', strtotime($latest_post->created_at)) }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="widget heading_space">
        <h4 class="bottom10">Categories</h4>
        <ul class="category">
            @foreach($categories() as $category)
                <li>
                    <a href="{{ route('news.by.category', ['category_id' => $category->id]) }}">
                        {{ $category->title }} ({{ $category->post_count }})
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside> --}}