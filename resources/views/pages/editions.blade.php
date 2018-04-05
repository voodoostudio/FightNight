@extends('layouts.app')

@section('content')
    <section class="editions_section">
        <div class="container-fluid">
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-12 col-md-7 col-xl-6">
                        <div class="edition__info-container">
                           <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2013</span></h2>
                            {!! trans('lang.editions_block_2013') !!}
                            <a href="{{ route('results', ['slug' => 'fight-night-2013']) }}" class="results_link">Résultats</a>

                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/fpEAXC99jXo" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-12 col-md-7 col-xl-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2014</span></h2>
                            {!! trans('lang.editions_block_2014') !!}
                            <a href="{{ route('results', ['slug' => 'fight-night-2014']) }}" class="results_link">Résultats</a>
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/8SPgVJgDC9g" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-12 col-md-7 col-xl-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2015</span></h2>
                            {!! trans('lang.editions_block_2015') !!}
                            <a href="{{ route('results', ['slug' => 'fight-night-2015']) }}" class="results_link">Résultats</a>
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/XE13I6VfS8E" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-12 col-md-7 col-xl-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2016</span></h2>
                            {!! trans('lang.editions_block_2016') !!}
                            <a href="{{ route('results', ['slug' => 'fight-night-2016']) }}" class="results_link">Résultats</a>
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/UEeEGZ_X8lw" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-12 col-md-7 col-xl-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2017</span></h2>
                            {!! trans('lang.editions_block_2017') !!}
                            <a href="{{ route('results', ['slug' => 'fight-night-2017']) }}" class="results_link">Résultats</a>
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xl-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/WbwQsnmjqAM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop