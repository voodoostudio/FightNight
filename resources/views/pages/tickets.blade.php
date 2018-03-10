@extends('layouts.app')

@section('content')
    <section class="tickets_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/tickets/tickets.jpg" alt="Titckets banner">
            </div>

            <div class="countdown_container jeans_bg">
                <h1 class="title--translated">Billeterie</h1>
                <div class="countdown">
                    <div class="countdown_item" id="days">
                        <svg id="animated_days" viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke="#00ffff" stroke-opacity="0.3" stroke-width="10" fill="#000000" fill-opacity="0"/>
                            <path id="progress_days" stroke-linecap="round" stroke-width="10" stroke="#00ffff" fill="none"
                                  d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                            </path>
                            <text class="count" x="50" y="50" font-family="proxima_nova_semibold" text-anchor="middle" dy="7" dx="7" fill="#00ffff">
                                <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">DAYS</tspan>
                            </text>
                        </svg>
                    </div>
                    <div class="countdown_item" id="hours">
                        <svg id="animated_hours" viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke="#00ffff" stroke-opacity="0.3" stroke-width="10" fill="#000000" fill-opacity="0"/>
                            <path id="progress_hours" stroke-linecap="round" stroke-width="10" stroke="#00ffff" fill="none"
                                  d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                            </path>
                            <text class="count" x="50" y="50" font-family="proxima_nova_semibold" text-anchor="middle" dy="7" dx="7" fill="#00ffff">
                                <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">HOURS</tspan>
                            </text>
                        </svg>
                    </div>
                    <div class="countdown_item" id="minutes">
                        <svg id="animated_minutes" viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke="#00ffff" stroke-opacity="0.3" stroke-width="10" fill="#000000" fill-opacity="0"/>
                            <path id="progress_minutes" stroke-linecap="round" stroke-width="10" stroke="#00ffff" fill="none"
                                  d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                            </path>
                            <text class="count" x="50" y="50" font-family="proxima_nova_semibold" text-anchor="middle" dy="7" dx="7" fill="#00ffff">
                                <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">MINUTES</tspan>
                            </text>
                        </svg>
                    </div>
                    <div class="countdown_item" id="seconds">
                        <svg id="animated_seconds" viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke="#00ffff" stroke-opacity="0.3" stroke-width="10" fill="#000000" fill-opacity="0"/>
                            <path id="progress_seconds" stroke-linecap="round" stroke-width="10" stroke="#00ffff" fill="none"
                                  d="M50 10 a 40 40 0 0 1 0 80 a 40 40 0 0 1 0 -80">
                            </path>
                            <text class="count" x="50" y="50" font-family="proxima_nova_semibold" text-anchor="middle" dy="7" dx="7" fill="#00ffff">
                                <tspan class="value" x="45" y="50" font-size="30" text-anchor="middle">0</tspan>
                                <tspan x="50" y="50" dy="2.2em" font-size="8" text-anchor="middle">SECONDS</tspan>
                            </text>
                        </svg>
                    </div>
                </div>
                <h3>Bientôt disponible...</h3>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script type="text/javascript" src="{{mix('js/index.js')}}"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 28, 2018 22:37:25").getTime();
        countdown();
    </script>
@stop