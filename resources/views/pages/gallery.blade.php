@extends('layouts.app')

@section('id', 'gallery')

@section('css')
@stop

@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp

@section('content')
    <section class="gallery_section" style="display: none">
        <div id="js-filters-full-width" class="cbp-l-filters-alignCenter">
            <div data-filter="*" class="cbp-filter-item">
               {{ trans('title_year') }}
            </div>
        </div>
        <div id="js-grid-full-width" class="cbp">
            @foreach(json_decode($gallery->gallery_images) as $image)
                <div class="cbp-item identity logos">
                    <a href="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->created_at->format('F_Y') }}/{{ $image }}" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->created_at->format('F_Y') }}/{{ $image }}" data-cbp-src="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->created_at->format('F_Y') }}/{{ $image }}" alt="">
                        </div>
                        {{--<div class="cbp-caption-activeWrap">--}}
                            {{--<div class="cbp-l-caption-alignLeft">--}}
                                {{--<div class="cbp-l-caption-body">--}}
                                    {{--<div class="cbp-l-caption-title">Dashboard</div>--}}
                                    {{--<div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="gallery_section">
        <div class="container-fluid">
            <div id="js-filters-mosaic" class="cbp-l-filters-alignCenter">
                <div data-filter="*" class="cbp-filter-item">
                    <span>{{ ($lang == 'fr') ?  $gallery->title_fr :  $gallery->title_en}}</span> / {{ $gallery->category_name }}
                </div>
            </div>
            <div id="js-grid-mosaic" class="cbp">
                @foreach(json_decode($gallery->gallery_images) as $image)
                    <div class="cbp-item">
                        <a href="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->created_at->format('F_Y') }}/{{ $image }}" class="cbp-caption cbp-lightbox">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->created_at->format('F_Y') }}/{{ $image }}" data-cbp-src="{{ URL::to('/') }}/gallery/gallery_images/{{ $gallery->created_at->format('F_Y') }}/{{ $image }}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop

@section('js')
    <script type="text/javascript" src="{{mix('js/gallery.js')}}"></script>
@stop