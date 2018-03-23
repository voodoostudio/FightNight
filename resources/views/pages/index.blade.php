@extends('layouts.app')

@section('title', 'Accueil')

@section('id', 'index')

@section('content')
     <section class="carousel_section">
        <div class="container-fluid">
            <div class="homepage_carousel">
                <div class="carousel-cell">
                    <img src="/img/carousel/3.png" alt="">
                    {{--<div class="caption">--}}
                        {{--<h1>learn to <span>defend</span> yourself in real life</h1>--}}
                    {{--</div>--}}
                    <div class="caption">
                        <h1><span class="small">Saint-Tropez</span><span class="big">Best Show</span></h1>
                        {{--<h1><span class="small">The best</span><span class="big">show</span> <span class="small">of st-tropez</span></h1>--}}
                    </div>
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/2.png" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/1.png" alt="">
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
                    <div class="col-12 col-md-5">
                        <div class="title_container">
                            <h4 title="Billeterie Prochainment Disponible">
                                <span>Billetterie Prochainement Disponible</span>
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
                                            <p>{{ mb_substr($posts['text'], 0, 70) }}</p>
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
                        <h2>Our <span>location</span></h2>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my_col">
                    <div class="page_thumbnail second">
                        <h2>Our <span>edition</span></h2>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my_col">
                    <div class="page_thumbnail third">
                        <h2>Our <span>location</span></h2>
                        <a href="#" class="btn">Read more</a>
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
        var countDownDate = new Date("Apr 25, 2018 00:00:01").getTime();
        countdown();
    </script>
@stop