<div class="row m0 widget recent_posts">
    <h5 class="widget_heading">@lang('themes::blog.recent posts')</h5>
    @foreach($posts as $post)
    <div class="media recent_post">
        @if($image = $post->present()->firstImage(143,122,'fit',80))
            <div class="media-left">
                <a href="{{ $post->url }}"><img src="{{ $image }}" alt="{{ $post->title }}"></a>
            </div>
        @endif
        <div class="media-body">
            <a href="{{ $post->url }}"><h5>{{ $post->title }}</h5></a>
            <p><a href="{{ $post->url }}">{{ $post->created_at->formatLocalized('%d %B %Y') }}</a></p>
        </div>
    </div>
    @endforeach
</div>
