@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'page'])
        {{ $page->title }}
        @slot("slogan")
            @if(isset($page->parent))
                {{ $page->parent->title }}
            @endif
        @endslot
    @endcomponent

    <section class="row service_details">
        <div class="container">
            <div class="row">
                @if(@$page->settings->show_menu && !@$page->settings->list_page_type)
                    @include('page::page-with-menu')
                @elseif(@$page->parent->settings->show_menu && !@$page->settings->list_page_type)
                    @include('page::page-with-menu')
                @else
                    @include('page::full-page')
                @endif
            </div>
        </div>
    </section>
@stop
