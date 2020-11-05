<footer class="row">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-3 footer_logo">
                <img class="lazy" data-src="{{ Theme::url('images/logo/logo-fr.svg') }}" alt="@setting('theme::company-name')" style="height: 65px; margin-bottom: 20px;">
                <p style="font-weight: 600; text-transform: uppercase;">@setting('theme::company-name')</p>
                <p>@lang('themes::theme.footer.intro')</p>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-3 footer_address">
                <div class="row address m0">
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body address_text">
                            @setting('theme::address')
                        </div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                        <div class="media-body address_text"><a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a></div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-phone"></i></div>
                        <div class="media-body address_text"><a class="phone" href="tel:{{ setting('theme::phone') }}">@setting('theme::phone')</a></div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-mobile-phone"></i></div>
                        <div class="media-body address_text">
                            <a  class="phone" href="tel:{{ setting('theme::phone') }}">@setting('theme::mobile')</a><br/>
                            <a  class="phone" href="tel:{{ setting('theme::phone2') }}">@setting('theme::phone2')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-6 footer_menuList">
                <div class="row m0"></div>
                <div class="row menuList">
                    {!! Menu::render('footer1', \Modules\Theme\Emekhb\Presenters\FooterMenuLinksPresenter::class) !!}
                    {!! Menu::render('footer2', \Modules\Theme\Emekhb\Presenters\FooterMenuSecondLinksPresenter::class) !!}
                    {!! Menu::render('footer3', \Modules\Theme\Emekhb\Presenters\FooterMenuThirdLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="row m0 footer_bottom">
            @include('partials.components.socials')
            <div class="fright copyright">&copy;@lang('themes::theme.footer.copyrights', ['company' => setting('theme::company-name'), 'date' => \Carbon\Carbon::now()->year])</div>
        </div>
    </div>
</footer>
