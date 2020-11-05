<section class="row recentpost_acc contentRowPad">
    <div class="container">
        <div class="row m0 titleRow">
            <h5>@lang('themes::blog.recent posts')</h5>
            <h2><a href="{{ route('blog.index') }}">@lang('themes::blog.title')</a></h2>
        </div>
        @foreach($posts->chunk(2) as $chunk)
        <div class="row recent_post_home recent_post_home3">
            @foreach($chunk as $post)
            <div class="col-sm-12 col-md-6">
                <div class="media">
                    <div class="media-left">
                        <a href="{{ $post->url }}"><img data-src="{{ $post->present()->firstImage(185,187,'fit',70) }}" alt="{{ $post->title  }}" class="img-reponsive lazy"></a>
                    </div>
                    <div class="media-body">
                        <a href="{{ $post->url }}"><h4>{{ $post->title }}</h4></a>
                        <p>{{ str_limit(strip_tags($post->intro), 160) }}</p>
                        <a href="{{ $post->url }}" class="btn margin-top-10">@lang("global.buttons.read more")</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
