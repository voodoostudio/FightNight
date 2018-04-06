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
                <h1 class="title--translated">{{ trans('lang.presse') }}</h1>
                <h2>{{ trans('lang.presse') }}</h2>

                <div class="press_carousel">
                    @foreach($news as $item)
                        @php
                            $extension = new SplFileInfo($item['image_file']);
                            $jpg_preview = preg_replace('"\.pdf$"', '.jpg', $item['image_file']);
                        @endphp
                        <div class="article_block">
                            <div class="article_img" style="background-image: url({{ (strtolower($extension->getExtension()) == 'pdf') ? URL::to('/') . '/news/pdf/' . date('F_Y', strtotime($item['updated_at'])) . '/' . $jpg_preview :  URL::to('/') . '/news/image/' . date('F_Y', strtotime($item['updated_at'])) . '/' . $item['image_file']}})">
                                <a href="#" data-toggle="modal" data-target="#image_{{ $item->id }}" class="article_link"></a>
                            {{--<a href="{{ route('press-details', ['id' => $item['id']]) }}" class="article_link"></a>--}}
                            {{--<div class="links_block">
                                @if(!empty($item['pdf_file']))
                                    <a href="{{ URl::to('/') }}/news/pdf/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['pdf_file'] }}" download><i class="far fa-file-pdf"></i></a>
                                @endif
                                @if(!empty($item['archive_file']))
                                    <a href="{{ URl::to('/') }}/news/archives/{{ date('F_Y', strtotime($item['created_at'])) }}/{{ $item['archive_file'] }}" download><i class="far fa-file-archive"></i></a>
                                @endif
                            </div>--}}
                            </div>
                            {{--<div class="article_info jeans_bg">

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
                                        --}}{{--                                            <h3><a href="{{ route('press-details', ['id' => $item['id']]) }}">{{ $item['title_fr'] }}</a></h3>--}}{{--
                                        <h3>{{ $item['title_'.$lang] }}</h3>
                                        <h4>Saint tropez</h4>
                                        --}}{{--<h3>{{ (!empty($item['date'])) ? date('d.m.Y', strtotime($item['created_at'])) : '' }}</h3>--}}{{--

                                        <p>{{ $item['description_'.$lang] }}</p>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    @endforeach
                </div>
                <h2>{{ trans('lang.accreditations') }}</h2>
                <p class="paragraph">{{ trans('lang.send_passport_copy') }} <a href="mailto:info@fightnights.pro">{{ trans('lang.site_mail') }}</a></p>

                <h2>{{ trans('lang.press_kit') }}</h2>
                <a href="/news/fightnight_2018.pdf" class="download_link" download="FightNight Saint-Tropez Communique de presse 2018">
                    <img src="/img/pdf.png" alt="PDF icn">
                </a>
                <p class="paragraph">{{ trans('lang.click_download') }}</p>
            </div>
        </div>
        @foreach($news as $item)
            @php
                $extension = new SplFileInfo($item['image_file']);
                $jpg_preview = preg_replace('"\.pdf$"', '.jpg', $item['image_file']);
            @endphp
        <!-- Modal -->
            <div class="modal fade" id="image_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="{{ (strtolower($extension->getExtension()) == 'pdf') ? URL::to('/') . '/news/pdf/' . date('F_Y', strtotime($item['updated_at'])) . '/' . $jpg_preview :  URL::to('/') . '/news/image/' . date('F_Y', strtotime($item['updated_at'])) . '/' . $item['image_file']}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@stop

@section('js')
    <script>
        $('.press_carousel').slick({
            infinite: true,
            slidesToShow: 6,
            centerMode: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<button type="button" class="slick-prev"><img src="/img/arrow_left.png" alt="Slide to previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="/img/arrow_right.png" alt="Slide to previous"></button>',
            responsive: [
                {
                    breakpoint: 1170,
                    settings: {
                        arrows: false,
                        centerPadding: '40px',
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        arrows: false,
                        centerPadding: '40px',
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                }
            ]
        });


        $('.modal').on('shown.bs.modal', function () {
            stopBodyScrolling(true);
        });

        $('.modal').on('hidden.bs.modal', function () {
            stopBodyScrolling(false);
        });

        var freezeVp = function(e) {
            e.preventDefault();
        };

        function stopBodyScrolling (bool) {
            if (bool === true) {
                document.body.addEventListener("touchmove", freezeVp, false);
            } else {
                document.body.removeEventListener("touchmove", freezeVp, false);
            }
        }
    </script>
@stop