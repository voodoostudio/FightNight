@extends('layouts.app')

@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp

@section('content')
    <section class="press_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/presse/presse_img.jpg" alt="About us banner">
            </div>
            <div class="press_container jeans_bg_ragged">
                <h1 class="title--translated">Presse</h1>
                <h2>Communiqués de presse  </h2>
                <div class="row">
                    @foreach($news as $item)
                        <div class="col-12 col-xl-4 col-md-6">
                            <div class="article_block">
                            @if(!empty($item['image_file']))
                                <div class="article_img" style="background-image: url({{ URL::to('/') }}/news/image/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['image_file'] }})">
                            @else
                                <div class="article_img" style="background-image: url('/img/no_image.svg')">
                            @endif
                                    <a href="{{ route('press-details', ['id' => $item['id']]) }}"></a>
                                </div>
                                <div class="article_info jeans_bg">
{{--                                            <h3><a href="{{ route('press-details', ['id' => $item['id']]) }}">{{ $item['title_fr'] }}</a></h3>--}}
                                    <h3>{{ $item['title_'.$lang] }}</h3>
                                    <h4>Saint tropez</h4>
                                    {{--<h3>{{ (!empty($item['date'])) ? date('d.m.Y', strtotime($item['created_at'])) : '' }}</h3>--}}
                                    <div class="links_block">
                                        @if(!empty($item['pdf_file']))
                                            <a href="{{ URl::to('/') }}/news/pdf/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['pdf_file'] }}" download><i class="far fa-file-pdf"></i></a>
                                        @endif
                                        @if(!empty($item['archive_file']))
                                            <a href="{{ URl::to('/') }}/news/archives/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['archive_file'] }}" download><i class="far fa-file-archive"></i></a>
                                        @endif
                                    </div>
                                    <p>{{ $item['description_'.$lang] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h2>Accréditations</h2>
                <p class="paragraph">Accréditez-vous a la Fight Night Saint-Tropez en envoyant une copie de votre carte de presse à <a href="mailto:info@fightnights.pro">info@fightnights.pro</a></p>

                <h2>Dossier de presse</h2>
                <a href="#" class="download_link">
                    <img src="/img/pdf.png" alt="PDF icn">
                </a>
                <p class="paragraph">Cliquez ici pour télécharger le dossier de presse Fight Night 2018 !</p>
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
        </div>
    </section>
@stop

@section('js')

@stop