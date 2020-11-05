<div class="row m0 widget categories">
    <h5 class="widget_heading">@lang('themes::blog.category.title')</h5>
    <ul class="list-unstyled">
        @foreach($categories as $category)
        <li><a href="{{ $category->url }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
