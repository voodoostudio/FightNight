@extends('layouts.app')

@section('id', 'galleries')

@section('css')
@stop

@php
    $lang = LaravelLocalization::getCurrentLocale();
    $total = count($menu);
    $counter = 0;
@endphp

@section('content')
    <section class="gallery_section">
        <div class="container-fluid">
            <div id="js-filters-mosaic" class="cbp-l-filters-alignCenter">
                <div data-filter="*" class="cbp-filter-item">
                    Tous les albums <div class="cbp-filter-counter"></div>
                </div> <span>/</span>
                @foreach($menu as $key => $item)
                    @php
                        $counter++;
                    @endphp
                    <div data-filter=".{{ strtolower(str_replace(' ', '_', $item)) }}" class="cbp-filter-item">
                        {{ $item }} <div class="cbp-filter-counter"></div>
                    </div> <span>{{ ($counter == $total) ? '' : '/'  }}</span>
                @endforeach
            </div>

            <div id="js-grid-mosaic" class="cbp">
                @foreach($gallery as $images)
                    <div class="cbp-item {{ strtolower(str_replace(' ', '_', $images->category_name)) }}">
                        <a href="{{ route('gallery_details', $images->id) }}" class="cbp-caption" data-title="{{ ($lang == 'fr') ? $images->title_fr : $images->title_en }}">
                            <div class="cbp-caption-defaultWrap grid-wrap">
                                <div class="mobile-text">
                                    {{ ($lang == 'fr') ? $images->title_fr : $images->title_en }}
                                </div>
                                @if(!empty($images->front_image))
                                    <img src="{{ URL::to('/') }}/gallery/front_image/{{ $images->updated_at->format('F_Y') }}/{{ $images->front_image }}" data-cbp-src="{{ URL::to('/') }}/gallery/front_image/{{ $images->updated_at->format('F_Y') }}/{{ $images->front_image }}" alt="{{ $images->front_image }}">
                                @else
                                    <img src="/img/details/no_agent_photo.svg" alt="">
                                @endif
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">{{ ($lang == 'fr') ? $images->title_fr : $images->title_en }}</div>
                                        {{--<div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>--}}
                                    </div>
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