<section class="row page_intro">
    <div class="row m0 inner">
        <div class="container">
            <div class="row">
                <h5>{{ $slogan ?? null }}</h5>
                <h1>{{ $slot ?? 'Başlık' }}</h1>
            </div>
        </div>
    </div>
</section>

@isset($breadcrumb)
    {!! Breadcrumbs::renderIfExists($breadcrumb) !!}
@endisset
