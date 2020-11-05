@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'blog.show'])
        {{ $post->title }}
        @slot('slogan')
            {{ $post->category->name }}
        @endslot
    @endcomponent

    <section class="row content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="row m0 blog single_post">
                        @if($image = $post->present()->firstImage(760,304,'fit',80))
                        <div class="image_row row m0" style="position: relative;">
                            <img src="{{ $image }}" alt="{{ $post->title }}" class="img-responsive">
                            <span class="label label-info" style="position: absolute; bottom:10px;">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
                        </div>
                        @endif

                            @component('partials.components.highlight-words', ['module'=>$post])
                                {!! $post->content !!}
                            @endcomponent
                    </div>
                </div>
                @include('blog::partials.sidebar')
            </div>
        </div>
    </section>
@stop
