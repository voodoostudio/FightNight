@extends('layouts.app')

@section('content')
    <section class="editions_section">
        <div class="container-fluid">
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2015</span></h2>
                            {!! trans('lang.editions_block1') !!}
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2015</span></h2>
                            <h3 class="edition_statistics"><span>1<sup>ere</sup> edition</span> 100 000 telespectateurs</h3>
                            <p class="edition_description">Crée en 2013 la FIGHT NIGHT de Saint-Tropez est un évènement devenu incontournable, alliant les plus hautes valeurs des sports de combat internationaux au caractère authentique de ce village de pêcheurs</p>
                            <p class="edition_person"><span>Guest</span>Sylvester Stalone</p>
                            <p class="edition_person"><span>Combats</span>Jerome Lebaner....</p>
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edition jeans_bg">
                <div class="row">
                    <div class="col-6">
                        <div class="edition__info-container">
                            <h2 class="edition_title"><span class="city">Saint-Tropez</span> Fight Night <span class="year">2015</span></h2>
                            <h3 class="edition_statistics"><span>1<sup>ere</sup> edition</span> 100 000 telespectateurs</h3>
                            <p class="edition_description">Crée en 2013 la FIGHT NIGHT de Saint-Tropez est un évènement devenu incontournable, alliant les plus hautes valeurs des sports de combat internationaux au caractère authentique de ce village de pêcheurs</p>
                            <p class="edition_person"><span>Guest</span>Sylvester Stalone</p>
                            <p class="edition_person"><span>Combats</span>Jerome Lebaner....</p>
                            <div class="edition__stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/z9Ul9ccDOqE" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop