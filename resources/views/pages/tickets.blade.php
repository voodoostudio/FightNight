@extends('layouts.app')

@section('content')
    <section class="tickets_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/tickets/tickets.jpg" alt="Titckets banner">
            </div>

            <div class="countdown_container jeans_bg_ragged">
                <h1 class="title--translated">{{ trans('lang.tickets_title') }}</h1>

                @include('includes.countdown')

                <h3>{{ trans('lang.coming_soon') }}</h3>
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