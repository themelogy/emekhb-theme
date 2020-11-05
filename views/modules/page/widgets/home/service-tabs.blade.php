<section class="row service_tab">
    <div class="container">
        <div class="row titleRow">
            <h5>@lang('themes::theme.service_tab.sub_title')</h5>
            <h2>@lang('themes::theme.service_tab.title')</h2>
        </div>
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist" id="service_tab">
                @foreach($pages as $page)
                <li role="presentation" @if($loop->first)class="active"@endif>
                    <a href="#{{ $page->slug.$page->id }}" aria-controls="{{ $page->slug.$page->id }}" role="tab" data-toggle="tab">
                        <span><i class="{{ $page->settings->service_tab_icon ?? "fa fa-home" }}"></i></span> {{ $page->title }}
                    </a>
                </li>
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($pages as $page)
                <div role="tabpanel" class="tab-pane @if($loop->first) active @endif " id="{{ $page->slug.$page->id }}">
                    <div class="col-sm-6">
                        <div class="row m0">
                            @if($image = $page->present()->firstImage(482,363,"fit",75))
                            <img data-src="{{ $image }}" alt="{{ $page->title }}" class="img-responsive lazy">
                            @unset($image)
                            @endif
                            @if($page->settings->slogan->{locale()})
                            <div class="ts">{{ $page->settings->slogan->{locale()} }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row m0">
                            <h3>{{ $page->title }}</h3>
                            @if($page->settings->sub_title->{locale()})
                            <h4>{{ $page->settings->sub_title->{locale()} }}</h4>
                            @endif
                            <p>{{ str_sentence(strip_tags($page->body), 4) }}</p>
                            <a href="{{ $page->url }}" class="view_all">@lang('themes::theme.buttons.read more')</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
