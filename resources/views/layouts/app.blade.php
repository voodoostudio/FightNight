<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - FightNights</title>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Heraclee website">
    <meta name="keywords" content="heraclee, website, responsive">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{mix('css/libraries.css')}}">
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
</head>
@yield('css')
<body>

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    <!-- Scripts -->
    <script type="text/javascript" src="{{mix('js/libraries.js')}}"></script>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    @yield('js')
</body>
</html>
