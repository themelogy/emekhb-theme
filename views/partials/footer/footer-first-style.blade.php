<footer class="row">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-3">
                <img src="{{ Theme::url('images/logo/logo-responsive.svg') }}" alt="@setting('theme::company-name')" style="height: 80px; margin-bottom: 20px; filter: grayscale(80%)">
            </div>
            <div class="col-sm-8 col-md-6 col-lg-3 footer_address">
                <div class="row address m0">
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body address_text">@setting('theme::address')</div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                        <div class="media-body address_text">@setting('theme::email')</div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-phone"></i></div>
                        <div class="media-body address_text">@setting('theme::phone')</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-6 footer_menuList">
                <div class="row m0"></div>
                <div class="row menuList">
                    {!! Menu::render('footer1', \Modules\Theme\Medicpro\Presenters\FooterMenuLinksPresenter::class) !!}
                    {!! Menu::render('footer2', \Modules\Theme\Medicpro\Presenters\FooterMenuSecondLinksPresenter::class) !!}
                    {!! Menu::render('footer3', \Modules\Theme\Medicpro\Presenters\FooterMenuThirdLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="row m0 footer_bottom">
            <ul class="list-inline social_menu m0 fleft">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <div class="fright copyright">&copy; <a href="@homepage">@lang('themes::theme.footer.copyrights')</div>
        </div>
    </div>
</footer>
