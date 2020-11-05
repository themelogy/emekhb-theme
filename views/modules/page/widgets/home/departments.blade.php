@if($pages->count() > 0)
<section class="row about_medicalpro_row">
    <div class="container">
        <div class="row titleRow">
            <h5>@lang('themes::theme.department.sub_title')</h5>
            <h2>@lang('themes::theme.department.title')</h2>
        </div>
        <div class="row">
            <ul class="nav nav-tabs department_tab" role="tablist">
                @foreach($pages as $page)
                <li role="presentation" @if($loop->first)class="active"@endif><a href="#{{ $page->slug.$page->id }}" aria-controls="{{ $page->slug.$page->id }}" role="tab" data-toggle="tab">{{ $page->title }}</a></li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($pages as $page)
                <div role="tabpanel" class="tab-pane @if($loop->first) active @endif" id="{{ $page->slug.$page->id }}">
                    <div class="row m0 about_medicalpro">
                        <div class="row m0 inner">
                            @if($image = $page->present()->firstImage(569,459,"fit",70))
                            <div class="col-sm-12 col-md-6 img">
                                <div class="row">
                                    <img src="{{ $image }}" alt="{{ $page->title }}" class="img-responsive">
                                </div>
                            </div>
                            @endif
                            <div class="col-sm-12 col-md-6 content">
                                <div class="row">
                                    @if($page->settings->sub_title->{locale()})
                                    <h3>{{ $page->settings->sub_title->{locale()} }}</h3>
                                    @endif
                                        <p>{{ str_sentence(strip_tags($page->body), 4) }}</p>
                                    <a href="{{ $page->url }}" class="view_all">@lang("global.buttons.read more")</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
