@extends('layouts.app')

@section('content')
    <section class="about_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/about/about.png" alt="About us banner">
            </div>
            <div class="about_container jeans_bg_ragged">
                <h1 class="title--translated">{{ trans('lang.about') }}</h1>
                {{--<p>{{ trans('lang.about_text1') }}</p>--}}

                {{--<p>{{ trans('lang.about_text2') }}</p>--}}


                <h3>{{ trans('lang.about_title') }}</h3>

                {!! trans('lang.about_text') !!}

                <h3>{{ trans('lang.about_title2') }}</h3>
                <p>{{ trans('lang.about_tickets_part1') }}<br>
                    <a href="{{ route('tickets') }}">{{ trans('lang.about_tickets_link') }}</a><br>
                {{ trans('lang.about_tickets_part2') }}</p>

                {{--<div class="row">--}}
                    {{--<div class="col-12">--}}
                        {{--<a href="#" class="red_btn">--}}
                            {{--Telecharger le programme 2018--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
@stop

@section('js')

@stop