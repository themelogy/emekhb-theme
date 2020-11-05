<section class="row top_bar">
    <div class="container">
        <div class="row m0">
            <div class="fleft schedule hidden-xs">

                    <i class="fa fa-map-marker"></i> @setting('theme::address')

            </div>
            <div class="fright contact_info">
                <div class="fleft email hidden-xs"><a href="mailto:{!! Html::email(setting('theme::email')) !!}"><i class="fa fa-envelope-o"></i> {!! Html::email(setting('theme::email')) !!}</a> </div>
                <div class="fleft phone"><a class="phone" href="tel:@setting('theme::phone')"><i class="fa fa-phone hidden-lg hidden-md"></i> @setting('theme::phone')</a></div>
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-default navbar-static-top navbar2">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="@homepage"><img src="{{ Theme::url('images/logo/logo.svg') }}" alt="@setting('theme::company-name')"></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-toggle visible-xs" data-toggle="modal" data-target="#appointmefnt_form_pop">@lang("themes::contact.call.button")</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main_nav">
            {!! Menu::render('header', \Modules\Theme\Medicpro\Presenters\HeaderMenuPresenter::class) !!}
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
