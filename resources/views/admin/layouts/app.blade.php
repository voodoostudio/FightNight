<!DOCTYPE html>
{{--<html lang="{{ app()->getLocale() }}">--}}
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title> @if((!empty(Route::current())) ? Route::current()->getName() == 'index' : '') {{ trans('lang.title_homepage') }} @elseif((!empty(Route::current())) ? Route::current()->getName() == 'about' : '') {{ trans('lang.title_about') }} @elseif((!empty(Route::current())) ? Route::current()->getName() == 'editions' : '') {{ trans('lang.title_editions') }} @endif </title>
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
    <style>
        .block-menu {
            padding: 15px 25px;
            background: #0000008a;
        }

        .block-menu a{
            color: #ffffff;
            font-size: 20px;
            text-transform: uppercase;
            padding: 18px;
        }

        .block-menu a:hover {
            background: #0000009e;
            text-decoration: none;
        }

        .admin-menu-active {
            background: #0000009e;
        }

        .block-menu ul {
            display: flex;
            justify-content: center;
        }

        .admin_item_img {
            max-height: 140px;
            overflow:hidden;
        }

        .admin_items_list_section .inner_block_container .row > div {
            max-height: 140px;
            margin-bottom: 20px;
        }
        .image_block {
            display: inline-block;
            position: relative;
        }

        .image_block > a{
            right: -5px;
            color: white;
            background: #000000d1;
            position: absolute;
            padding: 2.5px 5px 0.5px 5px;
            font-weight: lighter;
            top: -8px;
            text-decoration: none;
            font-size: 9px;
            border: 1px solid #ffffff;
        }

        .preview_front_image img {
            max-width: 100px;
            height: 60px;
            position: relative;
            text-align: center;
            z-index: -1;
        }

        .preview_front_image {
            text-align: center;
            top: 26px;
            position: relative;
            z-index: -1;
        }

        .preview_gallery_images {
            margin-top: 25px;
            padding: 0 12px;
        }

        .preview_gallery_images .image_block{
            position: relative;
            width: 11.5%;
            height: 0;
            padding-bottom: 11.5%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            border: 1px solid white;
            margin: 0.5%;
        }

        .preview_gallery_images .image_block img {
            /*width: 100px;
            height: 60px;*/
            border: 1px solid #ffffff;
        }

        @media(max-width: 991px) {
            .preview_gallery_images .image_block {
                width: 14.667%;
                padding-bottom: 14.667%;
                margin: 1%;
            }

            .preview_gallery_images {
                padding: 0 7px;
            }
        }

        @media(max-width: 585px) {
            .preview_gallery_images .image_block {
                width: 23%;
                padding-bottom: 23%;
                margin: 1%;
            }

            .preview_gallery_images {
                padding: 0 10px;
            }
        }

        @media(max-width: 480px) {
            .preview_gallery_images .image_block {
                width: 46%;
                padding-bottom: 46%;
                margin: 2%;
            }

            .preview_gallery_images {
                padding: 0 7px;
            }
        }

        @media(max-width: 340px) {
            .preview_gallery_images .image_block {
                width: 100%;
                padding-bottom: 100%;
                margin: 2%;
            }

            .preview_gallery_images {
                padding: 0 9px;
            }
        }

    </style>
    @yield('css')
</head>
<body id="@yield('id')">
<div class="wrapper">
@include('includes.header')
@yield('content')
@include('includes.footer')

<!-- Scripts -->
    <script type="text/javascript" src="{{mix('js/libraries.js')}}"></script>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
    @yield('js')
</div>
</body>
</html>
