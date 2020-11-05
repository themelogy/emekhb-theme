<div class="media blog">
    @if($image = $post->present()->firstImage(262,202,'fit',80))
        <div class="media-left">
            <a href="{{ $post->url }}"><img src="{{ $image }}" alt="{{ $post->title }}" class="img-reponsive"></a>
        </div>
    @endif
    <div class="media-body">
        <a href="{{ $post->url }}"><h3>{{ $post->title }}</h3></a>
        <p>{{ str_sentence(strip_tags($post->intro), 2) }}</p>
        <a href="{{ $post->url }}" class="view_all btn-sm">@lang('global.buttons.read more')</a>
    </div>
</div>
