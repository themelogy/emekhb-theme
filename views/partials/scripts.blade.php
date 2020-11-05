@stack('css-stack')
@stack('css-inline')

<!--[if lt IE 9]>
{!! Theme::style("vendors/rs-plugin/css/settings-ie8.css", ["media"=>"screen"]) !!}
{!! Theme::script("js/html5shiv.min.js", ["defer"]) !!}
{!! Theme::script("js/respond.min.js", ["defer"]) !!}
<![endif]-->

<!--jQuery-->
{!! Theme::script("js/jquery-2.1.3.min.js?v=1") !!}
{!! Theme::script("vendors/jquery.lazy.min.js?v=1", ["defer"]) !!}
{!! Theme::script("js/bootstrap.min.js?v=1", ["defer"]) !!}
{{--{!! Theme::script("vendors/owl.carousel/js/owl.carousel.min.js") !!}--}}
{{--{!! Theme::script("vendors/counterup/jquery.counterup.min.js") !!}--}}
{{--{!! Theme::script("vendors/waypoints/waypoints.min.js") !!}--}}
{{--{!! Theme::script("vendors/flexslider/jquery.flexslider-min.js") !!}--}}
{!! Theme::script("js/theme.js?v=2", ["defer"]) !!}

@stack('js-stack')
@stack('js-inline')
