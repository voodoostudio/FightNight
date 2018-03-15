@extends('layouts.app')

@section('content')
    <section class="press_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/presse/presse_img.jpg" alt="About us banner">
            </div>
            <div class="press_container jeans_bg_ragged">
                <h1 class="title--translated">Presse</h1>
                <div class="presse_block">
                    <h2>Communiqués de presse  </h2>
                    <div class="row">
                        @foreach($news as $item)
                            <div class="col-12 col-lg-6">
                                <div class="block_container">
                                    <div class="article_info_block">
                                        <div class="article_img">
                                            <a href="{{ route('press-details', ['id' => $item['id']]) }}">
                                                @if(!empty($item['image_file']))
                                                    <img style="max-height: 150px;" src="{{ URL::to('/') }}/news/image/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['image_file'] }}" alt="Photo">
                                                @else
                                                    <img src="/img/no_image.svg" alt="No photo">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="article_info">
                                            <h3><a href="{{ route('press-details', ['id' => $item['id']]) }}">{{ $item['title_fr'] }}</a></h3>
                                            <h3>{{ (!empty($item['date'])) ? date('d.m.Y', strtotime($item['created_at'])) : '' }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="presse_block">
                    <h2>Accréditations</h2>
                    <p>Accréditez-vous a la Fight Night Saint-Tropez en envoyant une copie de votre carte de presse à <a href="mailto:info@fightnights.pro"></a>info@fightnights.pro</p>
                </div>
                <div class="presse_block">
                    <h2>Dossier de presse</h2>
                    <p>Cliquez ici pour télécharger le dossier de presse Fight Night 2018 !</p>
                </div>
            </div>


            {{--<div class="row">--}}
                {{--@foreach($news as $item)--}}
                    {{--<div class="col-12 col-lg-6">--}}
                        {{--<div class="block_container">--}}
                            {{--<div class="article_info_block">--}}
                                {{--<div class="article_img">--}}
                                    {{--<a href="{{ route('press-details', ['id' => $item['id']]) }}">--}}
                                        {{--@if(!empty($item['image_file']))--}}
                                            {{--<img style="max-height: 150px;" src="{{ URL::to('/') }}/news/image/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['image_file'] }}" alt="Photo">--}}
                                        {{--@else--}}
                                            {{--<img src="/img/no_image.svg" alt="No photo">--}}
                                        {{--@endif--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="article_info">--}}
                                    {{--<h3><a href="{{ route('press-details', ['id' => $item['id']]) }}">{{ $item['title_fr'] }}</a></h3>--}}
                                    {{--<h3>{{ (!empty($item['date'])) ? date('d.m.Y', strtotime($item['created_at'])) : '' }}</h3>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        </div>
    </section>
@stop

@section('js')

@stop