@extends('layouts.app')

@section('css')
@stop

@section('content')
    <section class="gallery_section">
        {{--<div class="container-fluid">--}}
        <div id="js-filters-full-width" class="cbp-l-filters-alignCenter">
            <div data-filter="*" class="cbp-filter-item">
                ALL <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".identity" class="cbp-filter-item">
                IDENTITY <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".web-design" class="cbp-filter-item">
                WEB DESIGN <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".graphic" class="cbp-filter-item">
                GRAPHIC <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".logos" class="cbp-filter-item cbp-filter-item-active">
                LOGO <div class="cbp-filter-counter"></div>
            </div> /
            <div data-filter=".motion" class="cbp-filter-item">
                MOTION <div class="cbp-filter-counter"></div>
            </div>
        </div>
        <div id="js-grid-full-width" class="cbp">
            <div class="cbp-item identity logos">
                <a href="/img/gallery/1.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/1.jpg" data-cbp-src="/img/gallery/1.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic logos">
                <a href="/img/gallery/2.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/2.jpg" data-cbp-src="/img/gallery/2.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity motion">
                <a href="/img/gallery/3.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/3.jpg" data-cbp-src="/img/gallery/3.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design">
                <a href="/img/gallery/4.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/4.jpg" data-cbp-src="/img/gallery/4.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item logos">
                <a href="/img/gallery/5.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/5.jpg" data-cbp-src="/img/gallery/5.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity">
                <a href="/img/gallery/6.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/6.jpg" data-cbp-src="/img/gallery/6.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity graphic">
                <a href="/img/gallery/7.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/7.jpg" data-cbp-src="/img/gallery/7.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic logos">
                <a href="/img/gallery/8.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/8.jpg" data-cbp-src="/img/gallery/8.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">Dashboard</div>
                                <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{--</div>--}}
    </section>
@stop

@section('js')
    <script type="text/javascript" src="{{mix('js/gallery.js')}}"></script>
@stop