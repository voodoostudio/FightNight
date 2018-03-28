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
                <h1 class="title--translated">{{ trans('lang.press_title') }}</h1>
                <h2>{{ trans('lang.press_releases') }}</h2>
                <div class="row">
                    @foreach($news as $item)
                        <!-- ************************ -->
                        <!-- ******* ДЛЯ ВАНИ ******* -->
                        <!-- ************************ -->

                       {{--<span>{{ $item->updated_at->format('d') }}</span>--}}
                       {{--<span>{{ $item->updated_at->format('M') }}</span>--}}

                        <div class="col-12 col-xl-4 col-md-6">
                            <div class="article_block">
                                <div class="article_img" style="background-image: url({{ (!empty($item['image_file'])) ?  URL::to('/').'/news/image/'.date('F_Y', strtotime($item['created_at'])).'/'.$item['image_file'] :  '/img/no_image.svg'}})">
                                    <a href="{{ route('press-details', ['id' => $item['id']]) }}" class="article_link"></a>
                                    <div class="links_block">
                                        @if(!empty($item['pdf_file']))
                                            <a href="{{ URl::to('/') }}/news/pdf/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['pdf_file'] }}" download><i class="far fa-file-pdf"></i></a>
                                        @endif
                                        @if(!empty($item['archive_file']))
                                            <a href="{{ URl::to('/') }}/news/archives/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['archive_file'] }}" download><i class="far fa-file-archive"></i></a>
                                        @endif
                                    </div>
                                </div>
                                <div class="article_info jeans_bg">

                                    <div class="row my_row">
                                        <div class="col-3 my_col">
                                            <div class="date_container">
                                                {{ $item->updated_at->format('d') }}
                                            </div>
                                            <div class="date_container month">
                                                {{ strtolower($item->updated_at->format('M')) }}
                                            </div>
                                        </div>
                                        <div class="col-9 my_col">
                                            {{--                                            <h3><a href="{{ route('press-details', ['id' => $item['id']]) }}">{{ $item['title_fr'] }}</a></h3>--}}
                                            <h3>{{ $item['title_'.$lang] }}</h3>
                                            <h4>Saint tropez</h4>
                                            {{--<h3>{{ (!empty($item['date'])) ? date('d.m.Y', strtotime($item['created_at'])) : '' }}</h3>--}}

                                            <p>{{ $item['description_'.$lang] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h2>{{ trans('lang.accreditations') }}</h2>
                <p class="paragraph">{{ trans('lang.send_passport_copy') }} <a href="mailto:info@fightnights.pro">info@fightnights.pro</a></p>

                <h2>{{ trans('lang.press_kit') }}</h2>
                <a href="/news/fightnight_2018.pdf" class="download_link" download="FightNight Saint-Tropez Communique de presse 2018">
                    <img src="/img/pdf.png" alt="PDF icn">
                </a>
                <p class="paragraph">{{ trans('lang.click_download') }}</p>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop