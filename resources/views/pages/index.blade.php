@extends('layouts.app')

@section('content')
    <section class="posts">
        <div class="container-fluid">
            <div class="row">

                @foreach($sent_posts['updates'] as $posts)
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
                        countdown
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--<svg id="svg" viewbox="0 0 100 100">--}}
        {{--<circle cx="50" cy="50" r="45" fill="#FDB900"/>--}}
        {{--<path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"--}}
              {{--stroke-dasharray="1,250.2"--}}
              {{--d="M50 10--}}
           {{--a 40 40 0 0 1 0 80--}}
           {{--a 40 40 0 0 1 0 -80"/>--}}
        {{--<text x="50" y="50" text-anchor="middle" dy="7" font-size="20">1%</text>--}}
    {{--</svg>--}}
    {{--<svg viewbox="0 0 100 100">--}}
        {{--<circle cx="50" cy="50" r="45" fill="#FDB900"/>--}}
        {{--<path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"--}}
              {{--stroke-dasharray="125.6,125.6"--}}
              {{--d="M50 10--}}
           {{--a 40 40 0 0 1 0 80--}}
           {{--a 40 40 0 0 1 0 -80"/>--}}
        {{--<text x="50" y="50" text-anchor="middle" dy="7" font-size="20">50%</text>--}}
    {{--</svg>--}}
    {{--<svg viewbox="0 0 100 100">--}}
        {{--<circle cx="50" cy="50" r="45" fill="#FDB900"/>--}}
        {{--<path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"--}}
              {{--stroke-dasharray="251.2,0"--}}
              {{--d="M50 10--}}
           {{--a 40 40 0 0 1 0 80--}}
           {{--a 40 40 0 0 1 0 -80"/>--}}
        {{--<text x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>--}}
    {{--</svg>--}}

    {{--<svg id="animated" viewbox="0 0 100 100">--}}
        {{--<circle cx="50" cy="50" r="45" fill="#FDB900"/>--}}
        {{--<path id="progress" stroke-linecap="round" stroke-width="5" stroke="#fff" fill="none"--}}
              {{--d="M50 10--}}
           {{--a 40 40 0 0 1 0 80--}}
           {{--a 40 40 0 0 1 0 -80">--}}
        {{--</path>--}}
        {{--<text id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>--}}
    {{--</svg>--}}


    {{--<p id="demo"></p>--}}

@stop

@section('js')

@stop