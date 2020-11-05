<section class="row quick_blocks_row quick_blocks_row_home2">
    <div class="container">
        <div class="row">
            @foreach($pages as $page)
            <div class="col-sm-4 quick_block {{ $page->settings->quick_block_icon ?? "emmergency" }}">
                <div class="row m0 inner">
                    <div class="row heading m0">
                        <h5>{{ $page->settings->slogan->{locale()} }}</h5>
                        <h3>{{ $page->title }}</h3>
                    </div>
                    <p>{{ $page->settings->sub_title->{locale()} }}</p>
                    <a href="{{ $page->url }}">@lang('themes::theme.buttons.read more')</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
