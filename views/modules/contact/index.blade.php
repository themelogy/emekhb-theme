@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumb'=>'contact'])
        {{ trans('themes::contact.title') }}
    @endcomponent

    <section class="row contact_form_row">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 contact_address">
                    <h3 class="contact_section_title">@lang('themes::contact.contact us')</h3>
                    <div class="row address m0">
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body address_text">@setting('theme::address')</div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                            <div class="media-body address_text"><a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a></div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-phone"></i></div>
                            <div class="media-body address_text"><a href="tel:@setting('theme::phone')">@setting('theme::phone')</a></div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-mobile-phone"></i></div>
                            <div class="media-body address_text">
                                <a href="tel:@setting('theme::phone')">@setting('theme::mobile')</a><br/>
                                <a href="tel:@setting('theme::phone2')">@setting('theme::phone2')</a>
                            </div>
                        </div>
                        @component('contact::components.direction-us')
                            @lang('themes::contact.direction us')
                        @endcomponent
                    </div>
                </div>
                <div class="col-sm-7 contact_form_area">
                    <h3 class="contact_section_title">@lang('themes::contact.form.title')</h3>
                    <div class="contactForm row m0">
                        @include('contact::form')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row map_row">
        <div class="container">
            <h3 class="contact_section_title">@lang('themes::contact.location')</h3>
            @include('contact::map')
        </div>
    </section>
@stop
