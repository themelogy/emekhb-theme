@if ($breadcrumbs)
<section class="row breadcrumbRow">
    <div class="container">
        <div class="row inner m0">
            <ul class="breadcrumb">
                <li><a href="{{ route('homepage') }}">@lang('themes::theme.titles.homepage')</a></li>
                @foreach ($breadcrumbs as $crumb)
                    <?php
                    $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
                    ?>

                    @if ($crumb->url && ! $crumb->last)
                        <li>
                            <a href="{{ $crumb->url }}">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</a>
                        </li>
                    @else
                        <li class="active">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endif
