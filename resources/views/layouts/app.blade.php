<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
