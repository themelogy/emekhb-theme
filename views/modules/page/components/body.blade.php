@if(in_array($page->settings->image_position, ["top", "left", "right"]))
    @if(isset($page->settings->show_image))
        @include("page::components.image", ['page'=>$page, 'page_settings'=>$page->settings, 'body_image'=>true])
    @endif
@endif

@if(!@$page->settings->show_content)
    @component('partials.components.highlight-words', ['module'=>$page])
        {!! $page->body !!}
    @endcomponent
@endif

@if(in_array($page->settings->image_position, ["bottom"]))
    @if(isset($page->settings->show_image))
        @include("page::components.image", ['page'=>$page, 'page_settings'=>$page->settings, 'body_image'=>true])
    @endif
@endif

@if(@$page->settings->list_page)
    <div class="clearfix"></div>
    @pageChildren($page, 'page.page-list')
@endif
@if(isset($page->settings->page_list_service))
    @findChildren($page->settings->page_list_service, 'page.page-service', $page->settings->page_list_service_limit)
@endif
