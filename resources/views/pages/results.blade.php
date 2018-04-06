@extends('layouts.app')

@section('content')
    @if($slug == 'fight-night-2013')
        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2013.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    {!! trans('lang.results_content_1') !!}

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                {{ trans('trans.return') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2014')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2014.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">

                    {!! trans('lang.results_content_2') !!}

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                {{ trans('trans.return') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2015')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2015.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    {!! trans('lang.results_content_3') !!}

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                {{ trans('trans.return') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2016')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2016.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">

                    {!! trans('lang.results_content_4') !!}
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                {{ trans('trans.return') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2017')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2017.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">

                    {!! trans('lang.results_content_5') !!}
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                {{ trans('trans.return') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@stop

@section('js')

@stop