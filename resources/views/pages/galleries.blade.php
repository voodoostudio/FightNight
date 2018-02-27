@extends('layouts.app')

@section('id', 'galleries')

@section('css')
@stop

@section('content')
    <section class="gallery_section">
        {{--<div class="container-fluid">--}}
        <div id="js-filters-full-width" class="cbp-l-filters-alignCenter">
            <div data-filter="*" class="cbp-filter-item">
                Tous les albums <div class="cbp-filter-counter"></div>
            </div> <span>/</span>
            <div data-filter=".2013" class="cbp-filter-item">
                2013 <div class="cbp-filter-counter"></div>
            </div> <span>/</span>
            <div data-filter=".2014" class="cbp-filter-item">
                2014 <div class="cbp-filter-counter"></div>
            </div> <span>/</span>
            <div data-filter=".2015" class="cbp-filter-item">
                2015 <div class="cbp-filter-counter"></div>
            </div> <span>/</span>
            <div data-filter=".2016" class="cbp-filter-item cbp-filter-item-active">
                2016 <div class="cbp-filter-counter"></div>
            </div> <span>/</span>
            <div data-filter=".2017" class="cbp-filter-item">
                2017 <div class="cbp-filter-counter"></div>
            </div>
        </div>
        <div id="js-grid-full-width" class="cbp">
            <div class="cbp-item 2013">
                <a href="{{ route('gallery') }}" class="cbp-caption" data-title="Dashboard<br>by Paul Flavius Nechita">
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
            <div class="cbp-item 2014">
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
            <div class="cbp-item 2015">
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
            <div class="cbp-item 2016">
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
            <div class="cbp-item 2017">
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
            <div class="cbp-item 2013">
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
            <div class="cbp-item 2014">
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
            <div class="cbp-item 2015">
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
            <div class="cbp-item 2016">
                <a href="/img/gallery/9.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/9.jpg" data-cbp-src="/img/gallery/9.jpg" alt="">
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
            <div class="cbp-item 2017">
                <a href="/img/gallery/10.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/10.jpg" data-cbp-src="/img/gallery/10.jpg" alt="">
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
            <div class="cbp-item 2013">
                <a href="/img/gallery/11.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/11.jpg" data-cbp-src="/img/gallery/11.jpg" alt="">
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
            <div class="cbp-item 2014">
                <a href="/img/gallery/12.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/12.jpg" data-cbp-src="/img/gallery/12.jpg" alt="">
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
            <div class="cbp-item 2015">
                <a href="/img/gallery/13.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/13.jpg" data-cbp-src="/img/gallery/13.jpg" alt="">
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
            <div class="cbp-item 2017">
                <a href="/img/gallery/14.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/14.jpg" data-cbp-src="/img/gallery/14.jpg" alt="">
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
            <div class="cbp-item 2013">
                <a href="/img/gallery/15.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/15.jpg" data-cbp-src="/img/gallery/15.jpg" alt="">
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
            <div class="cbp-item 2014">
                <a href="/img/gallery/16.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/16.jpg" data-cbp-src="/img/gallery/16.jpg" alt="">
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
            <div class="cbp-item 2015">
                <a href="/img/gallery/17.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                    <div class="cbp-caption-defaultWrap">
                        <img src="/img/gallery/17.jpg" data-cbp-src="/img/gallery/17.jpg" alt="">
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