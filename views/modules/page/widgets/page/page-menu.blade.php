<div class="row m0 widget other_services">
    @if(isset($page->parent))
        <h5 class="widget_heading">{{ $page->parent->title }}</h5>
    @endif
    @if(isset($children))
    <ul class="list-unstyled services_list">
        @foreach($children as $child)
        <li><i class="fa fa-arrow-right"></i> <a href="{{ $child->url }}">{{ $child->title }}</a></li>
        @endforeach
    </ul>
    @endif
</div>

@component('page::components.call-service')
    <div class="heading">@lang('themes::theme.buttons.call now')</div>
    <a style="font-size: 2rem" href="tel:@setting('theme::mobile')">@setting('theme::mobile')</a>
@endcomponent
