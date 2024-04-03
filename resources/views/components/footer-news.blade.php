<div class="col-sm-4 footer_panel heading_space">
    <h3 class="bottom30 heading"> Recent <span class="" style="color: white">Posts</span></h3>
    @foreach ($news() as $newi)
        <div class="media">
            <div class="media-left">
                <a href="{{ route('news.signle', ['id' => $newi->id]) }}"><img class="media-object" width="80" src="{{ asset($newi->image) }}" alt="{{ $newi->title }}"></a>
            </div>
            <div class="media-body">
                <p><a href="{{ route('news.signle', ['id' => $newi->id]) }}" class="text-white">{{ $newi->sub_title }}</a></p>
                <span><i class="icon-calendar"></i>{{ date('F j, Y', strtotime($newi->created_at)) }}</span>
            </div>
        </div>
    @endforeach
</div>