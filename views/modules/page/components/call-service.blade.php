<div class="row m0 quick_block emmergency">
    <div class="row m0 inner">
        <div class="row heading m0">
            @if(isset($sub_title))
                {!! $sub_title !!}
            @else
            <h5>@lang('themes::theme.quick-block.sub_title')</h5>
            @endif
            @if(isset($title))
                {!! $title !!}
            @else
            <h3>@lang('themes::theme.quick-block.title')</h3>
            @endif
        </div>
        <p>@lang('themes::theme.quick-block.desc')</p>
        {!! $slot ?? null !!}
    </div>
</div>
