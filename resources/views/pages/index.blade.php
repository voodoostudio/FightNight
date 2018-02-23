@extends('layouts.app')

@section('content')
    <section class="posts_section">
        <div class="container-fluid">
            <div class="row">

                @foreach($social_posts as $posts)
                   <div class="col-lg-3">
                       <h3>{{ $posts['profile_service'] }}</h3>
                       <h4>{{ $posts['day'] }}</h4>
                       <p>Published: {{ $posts['text'] }}</p>
                       @if(isset($posts['media']))
                           <img src="{{ $posts['media']['thumbnail'] }}" />
                       @endif

                       <div class="statistics">
                           <span>Comments: {{ (!empty($posts['statistics']['comments'])) ? $posts['statistics']['comments'] : 0}}</span>
                           <span>Likes: {{ (!empty($posts['statistics']['likes'])) ? $posts['statistics']['likes'] : 0 }}</span>
                           <span>Clicks: {{ (!empty($posts['statistics']['clicks'])) ? $posts['statistics']['clicks'] : 0 }}</span>
                       </div>
                   </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="carousel_section">
        <div class="container-fluid">
            <div class="homepage_carousel">
                <div class="carousel-cell">
                    <img src="/img/carousel/1.png" alt="">
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
                        <img src="/img/ticket.png" alt="ticket">
                    </div>
                    <div class="col-7">
                        <div class="countdown_item days">
                            <svg class="animated" viewbox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="12" fill="#000000" fill-opacity="0"/>
                                <path class="progress" stroke-linecap="round" stroke-width="12" stroke="#7f7f7f" fill="none"
                                      d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                </path>
                                <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                    <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                    <tspan x="50" y="50" dy="2em" font-size="10" text-anchor="middle">DAYS</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="countdown_item hours">
                            <svg class="animated" viewbox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="12" fill="#000000" fill-opacity="0"/>
                                <path class="progress" stroke-linecap="round" stroke-width="12" stroke="#7f7f7f" fill="none"
                                      d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                </path>
                                <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                    <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                    <tspan x="50" y="50" dy="2em" font-size="10" text-anchor="middle">HOURS</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="countdown_item minutes">
                            <svg class="animated" viewbox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="12" fill="#000000" fill-opacity="0"/>
                                <path class="progress" stroke-linecap="round" stroke-width="12" stroke="#7f7f7f" fill="none"
                                      d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                </path>
                                <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                    <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                    <tspan x="50" y="50" dy="2em" font-size="10" text-anchor="middle">MINUTES</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="countdown_item seconds">
                            <svg class="animated" viewbox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="#333333" stroke-width="12" fill="#000000" fill-opacity="0"/>
                                <path class="progress" stroke-linecap="round" stroke-width="12" stroke="#7f7f7f" fill="none"
                                      d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                                </path>
                                <text class="count" x="50" y="50" text-anchor="middle" dy="7" dx="7" fill="white">
                                    <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                    <tspan x="50" y="50" dy="2em" font-size="10" text-anchor="middle">SECONDS</tspan>
                                </text>
                            </svg>
                        </div>

                        <p id="demo" style="color: white"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>







@stop

@section('js')

@stop