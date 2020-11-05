@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'blog.category'])
        {{ trans('themes::tags.tag', ['tag'=>$tag->name]) }}
    @endcomponent

    <section class="row content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 blog_list">
                    @foreach($posts as $post)
                        @include('blog::partials._post')
                    @endforeach
                </div>
                @include('blog::partials.sidebar')
            </div>
        </div>
    </section>
@stop
