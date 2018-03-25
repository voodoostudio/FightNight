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

    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-66441242-1', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{mix('css/libraries.css')}}">
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
    @yield('css')
</head>
<body id="@yield('id')">

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    <!-- Scripts -->
    <script type="text/javascript" src="{{mix('js/libraries.js')}}"></script>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    @yield('js')
</body>
</html>
