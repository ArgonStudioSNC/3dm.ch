<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')3DM - Visualisations architecturales</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/jquery.parallax.min.js') }}" defer></script>
    <script src="{{ asset('/js/3dm.website.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/bf8f37f6e5.js" crossorigin="anonymous" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/3dm.website.css') }}" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    @yield('content')
</body>
</html>
