<!DOCTYPE html>
<html lang="tr">
<head>
@include('partials.metadata')
</head>
<body class="default home2">
@include('partials.header')
@yield('content')
@includeWhen(Request::route()->getName() != 'contact', 'contact::widgets.home.modal-link')
@include('partials.footer')
@includeWhen(Request::route()->getName() != 'contact', 'contact::widgets.home.modal')
@include('partials.scripts')
</body>
</html>
