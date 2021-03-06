@extends('layouts.app')

@section('title', 'Accueil')

@section('id', 'index')

@section('content')
    <section class="carousel_section" style="display:none">
        <div class="container-fluid">
            <div class="homepage_carousel flickity_carousel">
                <div class="carousel-cell">
                    <img src="/img/carousel/1.jpg" alt="">
                    {{--<div class="caption">--}}
                    {{--<h1>learn to <span>defend</span> yourself in real life</h1>--}}
                    {{--</div>--}}
                    <div class="caption">
                        {{--<h1><span class="small">Saint-Tropez</span><span class="big">Best Show</span></h1>--}}
                        <h1><span class="small">The best</span><span class="big">show</span> <span class="small">of st-tropez</span></h1>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/2.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/3.jpg" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="carousel_section">
        <div class="container-fluid">
            <div class="homepage_carousel slick_carousel">
                <div class="carousel_cell">
                    <img src="/img/carousel/1_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/1.jpg" alt="" class="d-none d-sm-block">
                    {{--<div class="caption">--}}
                    {{--<h1>learn to <span>defend</span> yourself in real life</h1>--}}
                    {{--</div>--}}
                    <div class="caption">
                        {{--<h1><span class="small">Saint-Tropez</span><span class="big">Best Show</span></h1>--}}
                        <h1><span class="small">One of the best</span><span class="big">shows</span> <span class="small">of saint-tropez</span><span class="small">KICK BOXING & MUAYTHAI</span></h1>
                    </div>
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/2_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/2.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/3_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/3.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/4_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/4.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/5_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/5.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/6_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/6.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/7_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/7.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/8_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/8.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/9_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/9.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/10_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/10.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/11_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/11.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/12_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/12.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/13_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/13.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/14_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/14.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/15_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/15.jpg" alt="" class="d-none d-sm-block">
                </div>
                <div class="carousel_cell">
                    <img src="/img/carousel/16_sm.jpg" alt="" class="d-sm-none">
                    <img src="/img/carousel/16.jpg" alt="" class="d-none d-sm-block">
                </div>
            </div>
        </div>
    </section>

    <section class="countdown_section">
        <div class="container-fluid">
            <div class="countdown_container jeans_bg">
                <div class="row">
                    <div class="col-12 col-md-7">
                        @include('includes.countdown')
                    </div>
                    <div class="col-12 col-md-5" >
                        <div class="title_container" title="4 Août 2018, La Citadele de Saint-Tropez">
                            <h4>
                                <span>4 août 2018</span>
                            </h4>
                            <h4>
                                <span>{!! trans('lang.ticketing_coming') !!}</span>
                            </h4>
                            {{--<img src="/img/countdown_title.png" alt="ticket">--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="posts_section">
        <div class="container-fluid">
            <div class="carousel_container">
                <div class="posts_carousel">
                    @php
                        $counter = 0;
                    @endphp

                    @foreach($formatted_posts as $posts)
                        @php
                            $counter++;
                        @endphp
                        @if($counter <= $count_items)
                            <div class="carousel_item">
                                <div class="post_block jeans_bg">
                                    <div class="row my_row">
                                        <div class="col-3 my_col">
                                            <div class="date_container">
                                                {{ date( "d", $posts['created_at']) }}
                                            </div>
                                            <div class="date_container month">
                                                {{ strtolower(date( "M", $posts['created_at'])) }}
                                            </div>
                                        </div>
                                        <div class="col-9 my_col">
                                            <h5>Fight Night</h5>
                                            <h6>Saint Tropez</h6>
                                            <p>{{ mb_substr($posts['text'], 0, 70) }} ...</p>
                                            <div class="social_links">
                                                @if(!empty($posts['facebook_link']))
                                                    <a href="{{ $posts['facebook_link'] }}"><i class="fab fa-facebook-f"></i></a>
                                                @endif
                                                @if(!empty($posts['linked_link']))
                                                    <a href="{{ $posts['linked_link'] }}"><i class="fab fa-linkedin-in"></i></a>
                                                @endif
                                                @if(!empty($posts['twitter_link']))
                                                    <a href="{{ $posts['twitter_link'] }}"><i class="fab fa-twitter"></i></a>
                                                @endif
                                                @if(!empty($posts['instagram_link']))
                                                    <a href="{{ $posts['instagram_link'] }}"><i class="fab fa-instagram"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="thumbnails_section">
        <div class="container-fluid">
            <div class="row my_row">
                <div class="col-sm-6 col-md-4 my_col">
                    <div class="page_thumbnail first">
                        <h2>{!! trans('lang.our_tickets') !!}</h2>
                        <a href="{{ route('tickets') }}" class="btn">Acheter</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my_col">
                    <div class="page_thumbnail second">
                        <h2>{!! trans('lang.our_editions') !!}</h2>
                        <a href="{{ route('editions') }}" class="btn">Découvrir</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my_col">
                    <div class="page_thumbnail third">
                        <h2>{!! trans('lang.partners') !!}</h2>
                        <a href="{{ route('partners') }}" class="btn">{{ trans('lang.see_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script type="text/javascript" src="{{mix('js/index.js')}}"></script>
    <script>
        // Set the date we're counting down to
        //        var countDownDate = new Date("Aug 4, 2018 00:00:01").getTime();
        var countDownDate = new Date("Aug 4, 2018 00:00:01").getTime();
        countdown();
    </script>
@stop