@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/cubeportfolio.css">
@stop

@section('content')
    <section class="gallery_section">
        <div class="container-fluid">
            <div id="filters-container">
                <!-- '*' means shows all item elements -->
                <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All</div>
                <div data-filter=".animation" class="cbp-filter-item">Animation</div>
                <div data-filter=".artwork" class="cbp-filter-item">Artwork</div>
                <div data-filter=".illustration" class="cbp-filter-item">Illustration</div>
                <div data-filter=".photography" class="cbp-filter-item">Photography</div>
            </div>
            <div id="grid-container">
                <div class="cbp-item animation">
                    <a href="#" title="custom title 1">
                        <img src="/img/gallery/1.jpg" alt="custom alt 1">
                    </a>
                </div>
                <div class="cbp-item artwork">
                    <a href="#" title="custom title 2">
                        <img src="/img/gallery/2.jpg" alt="custom alt 2">
                    </a>
                </div>
                <div class="cbp-item photography">
                    <a href="#" title="custom title 3">
                        <img src="/img/gallery/3.jpg" alt="custom alt 3">
                    </a>
                </div>
                <div class="cbp-item photography">
                    <a href="#" title="custom title 3">
                        <img src="/img/gallery/4.jpg" alt="custom alt 3">
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script type="text/javascript" src="{{mix('js/gallery.js')}}"></script>
@stop