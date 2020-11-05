<div class="row m0 widget tags">
    <h5 class="widget_heading">{{ trans('themes::tags.title') }}</h5>
    <div class="row m0 tag_list">
        @foreach($tags as $tag)
        <a href="{{ route('blog.tag', [$tag->slug]) }}" class="tag">{{ $tag->name }}</a>
        @endforeach
    </div>
</div>
