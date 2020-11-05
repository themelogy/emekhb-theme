@foreach($children->chunk(4) as $chunk)
<div class="row page-service margin-top-50">
    @foreach($chunk as $page)
        <div class="col-sm-4 col-md-3">
            <div class="row m0 inner page-service-block">
                <div class="row icon"><i class="{{ $page->settings->page_list_service_icon ?? "fa fa-home" }}"></i></div>
                <h4>{{ $page->title }}</h4>
                <p>{{ str_limit(strip_tags($page->body), 160) }}</p>
            </div>
        </div>
    @endforeach
</div>
@endforeach
