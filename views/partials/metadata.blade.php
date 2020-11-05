{!! seo_helper()->render() !!}

<!--Favicons-->
<link rel="icon" type="image/png" sizes="32x32" href="{{ Theme::url('images/favicon.png') }}">
<meta name="theme-color" content="#ffffff">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,500,500italic,600,600italic,700,700italic:latin-ext&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic:latin-ext&display=swap" rel="stylesheet">

<!--Bootstrap and Other Vendors-->
{!! Theme::style("css/bootstrap.min.css") !!}
{!! Theme::style("css/bootstrap-theme.min.css") !!}
{{--{!! Theme::style("vendors/owl.carousel/css/owl.carousel.min.css") !!}--}}
{{--{!! Theme::style("vendors/owl.carousel/css/owl.theme.default.min.css") !!}--}}
{{--{!! Theme::style("vendors/flexslider/flexslider.css") !!}--}}
<!--Mechanic Styles-->
{!! Theme::style("css/style.css?v=1") !!}
{!! Theme::style("css/responsive.css?v=1") !!}

@if(setting("core::analytics-script"))
{!! setting("core::analytics-script") !!}
@endif
