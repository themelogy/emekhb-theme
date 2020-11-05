@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'page.tag'])
        {{ trans('themes::tags.tag', ['tag'=>$tag->name]) }}
    @endcomponent

    <section class="row service_details">
        <div class="container">
            @if($pages->count()>0)
                @foreach($pages->chunk(4) as $chunk)
                    <div class="row">
                        @foreach($chunk as $page)
                            <div class="col-md-3">
                                <div class="thumbnail card">
                                    @if($image = $page->present()->firstImage(260,150,'fit',80))
                                        <img src="{{ $image }}" alt="{{ $tag->name }}" class="img-responsive" />
                                    @endif
                                    <div class="caption">
                                        <a href="{{ $page->url }}">
                                            <h5 class="card-title font-16 title">{{ $page->title }}</h5>
                                        </a>
                                        <p>{{ str_limit(strip_tags($page->body), 180) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-md-12">
                        {!! $pages->links('partials.components.pagination') !!}
                    </div>
                </div>
            @endif
        </div>
    </section>

@stop
