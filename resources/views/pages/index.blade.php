@extends('layouts.app')

@section('title', 'Accueil')

@section('id', 'index')

@section('content')
     <section class="carousel_section">
        <div class="container-fluid">
            <div class="homepage_carousel">
                <div class="carousel-cell">
                    <img src="/img/carousel/1.png" alt="">
                    <div class="caption">
                        <h1>learn to <span>defend</span> yourself in real life</h1>
                    </div>
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/1.png" alt="">
                </div>
                <div class="carousel-cell">
                    <img src="/img/carousel/1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="countdown_section">
        <div class="container-fluid">
            <div class="countdown_container">
                <div class="row">
                    <div class="col-5">
                        <div class="ticket_container">
                            <img id="arrow" src="/img/ticket_arrow.png" alt="">
                            <img id="ticket" src="/img/ticket.png" alt="ticket">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="countdown">
                            <div class="countdown_item" id="days">
                                <svg id="animated_days" viewbox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="10" fill="#000000" fill-opacity="0"/>
                                    <path id="progress_days" stroke-linecap="round" stroke-width="10" stroke="#7f7f7f" fill="none"
                                          d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                    </path>
                                    <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                        <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                        <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">DAYS</tspan>
                                    </text>
                                </svg>
                            </div>
                            <div class="countdown_item" id="hours">
                                <svg id="animated_hours" viewbox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="10" fill="#000000" fill-opacity="0"/>
                                    <path id="progress_hours" stroke-linecap="round" stroke-width="10" stroke="#7f7f7f" fill="none"
                                          d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                    </path>
                                    <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                        <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                        <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">HOURS</tspan>
                                    </text>
                                </svg>
                            </div>
                            <div class="countdown_item" id="minutes">
                                <svg id="animated_minutes" viewbox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="10" fill="#000000" fill-opacity="0"/>
                                    <path id="progress_minutes" stroke-linecap="round" stroke-width="10" stroke="#7f7f7f" fill="none"
                                          d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                    </path>
                                    <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                        <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                        <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">MINUTES</tspan>
                                    </text>
                                </svg>
                            </div>
                            <div class="countdown_item" id="seconds">
                                <svg id="animated_seconds" viewbox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="10" fill="#000000" fill-opacity="0"/>
                                    <path id="progress_seconds" stroke-linecap="round" stroke-width="10" stroke="#7f7f7f" fill="none"
                                          d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                    </path>
                                    <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                        <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                        <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">SECONDS</tspan>
                                    </text>
                                </svg>
                            </div>
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

                     @foreach ($social_posts as $key => $items)
                         @php
                             $counter++;
                         @endphp
                         @php
                             $posts = array_merge(
                                 [
                                    'text'       => (isset($items['facebook'])) ? $items['facebook']['text'] : ((isset($items['linkedin'])) ? $items['linkedin']['text'] : ((isset($items['twitter'])) ? $items['twitter']['text'] : ((isset($items['instagram'])) ? $items['instagram']['text'] : ''))),
                                    'day'        => (isset($items['facebook'])) ? $items['facebook']['day'] : ((isset($items['linkedin'])) ? $items['linkedin']['day'] : ((isset($items['twitter'])) ? $items['twitter']['day'] : ((isset($items['instagram'])) ? $items['instagram']['day'] : ''))),
                                    'created_at' => (isset($items['facebook'])) ? $items['facebook']['created_at'] : ((isset($items['linkedin'])) ? $items['linkedin']['created_at'] : ((isset($items['twitter'])) ? $items['twitter']['created_at'] : ((isset($items['instagram'])) ? $items['instagram']['created_at'] : ''))),
                                    'updated_at' => (isset($items['facebook'])) ? $items['facebook']['updated_at'] : ((isset($items['linkedin'])) ? $items['linkedin']['updated_at'] : ((isset($items['twitter'])) ? $items['twitter']['updated_at'] : ((isset($items['instagram'])) ? $items['instagram']['updated_at'] : ''))),
                                 ],

                                 [
                                    'facebook_link'    => (isset($items['facebook']['link'])) ? $items['facebook']['link'] : ''
                                 ],

                                 [
                                    'linked_link' => (isset($items['linkedin']['link'])) ? $items['linkedin']['link'] : ''
                                 ],

                                 [
                                    'twitter_link' => (isset($items['twitter']['link'])) ? $items['twitter']['link'] : ''
                                 ],

                                 [
                                    'instagram_link' => (isset($items['instagram']['link'])) ? $items['instagram']['link'] : ''
                                 ]
                             );
                         @endphp
                         @if($counter <= 4)
                             <div class="carousel_item">
                                 <div class="post_block">
                                     <div class="row my_row">
                                         <div class="col-3 my_col">
                                             <div class="date_container">
                                                 {{ date( "d", $posts['created_at']) }}
                                             </div>
                                             <div class="date_container month">
                                                 {{ date( "M", $posts['created_at']) }}
                                             </div>
                                             {{--<h4>{{ $posts['day'] }} </h4>--}}
                                         </div>
                                         <div class="col-9 my_col">
                                             {{--<h3>{{ $posts['profile_service'] }}</h3>--}}
                                             <p>{{ mb_substr($posts['text'], 0, 100) }}</p>
                                             @if(!empty($posts['facebook_link']))
                                                <span><a href="{{ $posts['facebook_link'] }}">fb</a></span>
                                             @endif
                                             @if(!empty($posts['linked_link']))
                                                <span><a href="{{ $posts['linked_link'] }}">in</a></span>
                                             @endif
                                             @if(!empty($posts['twitter_link']))
                                                <span><a href="{{ $posts['twitter_link'] }}">tw</a></span>
                                             @endif
                                             @if(!empty($posts['instagram_link']))
                                                <span><a href="{{ $posts['instagram_link'] }}">insta</a></span>
                                             @endif
                                             {{--<p>{{ $posts['text'] }}</p>--}}
                                         </div>
                                     </div>
                                 </div>
                                 {{--<h3>{{ $posts['profile_service'] }}</h3>--}}
                                 {{--<h4>{{ $posts['day'] }} </h4>--}}
                                 {{--<p>Published: {{ $posts['text'] }}</p>--}}
                                {{-- @if(isset($posts['media']))
                                     <img src="{{ $posts['media']['thumbnail'] }}" />
                                 @endif

                                 <div class="statistics">
                                     <span>Comments: {{ (!empty($posts['statistics']['comments'])) ? $posts['statistics']['comments'] : 0}}</span>
                                     <span>Likes: {{ (!empty($posts['statistics']['likes'])) ? $posts['statistics']['likes'] : 0 }}</span>
                                     <span>Clicks: {{ (!empty($posts['statistics']['clicks'])) ? $posts['statistics']['clicks'] : 0 }}</span>
                                 </div>--}}
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
                <div class="col-4 my_col">
                    <div class="page_thumbnail">
                        <h2>Our <span>location</span></h2>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="col-4 my_col">
                    <div class="page_thumbnail">
                        <h2>Our <span>edition</span></h2>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="col-4 my_col">
                    <div class="page_thumbnail">
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
        var countDownDate = new Date("Feb 28, 2018 22:37:25").getTime();
        countdown();
    </script>
@stop