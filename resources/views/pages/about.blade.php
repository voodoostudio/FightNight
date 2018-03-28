@extends('layouts.app')

@section('content')
    <section class="about_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/about.png" alt="About us banner">
            </div>
            <div class="about_container jeans_bg_ragged">
                <h1 class="title--translated">{{ trans('lang.about') }}</h1>
                {{--<p>{{ trans('lang.about_text1') }}</p>--}}

                {{--<p>{{ trans('lang.about_text2') }}</p>--}}


                <h3>Fight Night VI</h3>

                <p>Une soirée sportive et glamour exceptionnelle dans un lieu magique !</p>

                <h3>SUR LE RING</h3>
                <p>Rendez-vous sportif désormais incontournable, la Fight Night 6 s'annonce plus palpitante que jamais avec ses combats internationaux, des tournois de « 4 Man », un Championnat du Monde ainsi qu'un combat féminin. Fight on !</p>

                <h3>LE SHOW</h3>
                <p>Autour de l'un des plus beaux rings au monde, la Fight Night 6 vous propose un show à couper le souffle avec des effets visuels et pyrotechniques grandioses, le célèbre mapping projeté sur le donjon, de nouveaux aménagements et plein de surprises ! Rendez-vous le 4 Août !</p>

                <h3>LA 6ème EDITION</h3>
                <p>Ne vous le faites pas raconter : venez vivre l'évènement en direct !<br>
                    <a href="{{ route('tickets') }}">Mise en vente des billets le 25 avril 2018</a><br>
                A tous nos fans et invités de prestige, nous souhaitons une excellente Fight Night 6 !</p>

            </div>
        </div>
    </section>
@stop

@section('js')

@stop