@extends('layouts.app')

@section('content')
    <section class="partners_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/presse/presse_img.jpg" alt="About us banner">
            </div>
            <div class="partners_container jeans_bg_ragged">
                <h1 class="title--translated">Partenaires</h1>
                <h2>Partenaires historiques</h2>
                <div class="partners_carousel">
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/bagatelle.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/bagatelle.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/bagatelle.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/bagatelle.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/bagatelle.png" alt="logo">
                            </div>
                        </a>
                    </div>
                </div>
                <h2>Grands partenaires</h2>
                <div class="partners_carousel">
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/bagatelle.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/heraclee.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/madinevent.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/mairie.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/partners/grands_partenaires/moorea.png" alt="logo">
                            </div>
                        </a>
                    </div>
                </div>
                <h2>Partenaires privilégiés</h2>
                <div class="partners_carousel">
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                </div>
                <h2>Partenaires médias</h2>
                <div class="partners_carousel">
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                    <div class="carousel_item">
                        <a href="#">
                            <div class="partner">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $('.partners_carousel').flickity({
            // options
            cellAlign: 'left',
            cellSelector: '.carousel_item',
            prevNextButtons: true,
            contain: true,
            wrapAround: true,
            pageDots: false,
            // autoPlay: true,
            arrowShape: {
                x0: 15,
                x1: 65, y1: 50,
                x2: 70, y2: 45,
                x3: 25
            }
        });
    </script>
@stop