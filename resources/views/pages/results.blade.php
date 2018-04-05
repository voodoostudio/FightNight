@extends('layouts.app')

@section('content')
    @if($slug == 'fight-night-2013')
        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2013.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    <h1 class="title--translated">Résultats 2013</h1>

                    <h3>CHAMPIONNAT DU MONDE WKN</h3>

                    <p>
                        Kick boxing . 5×2 mn . +100kg<br>
                        Vainqueur : Jerome LE BANNER par KO2
                    </p>
                    <p>
                        Kick boxing . 5×2 mn . -100kg<br>
                        Vainqueur : Wladimir MINEEV aux points
                    </p>
                    <p>
                        Kick boxing . 5×2 mn . -96,600kg<br>
                        Vainqueur : Emmanuel PAYET aux points
                    </p>

                    <h3>MASTERFIGHT</h3>
                    <p>
                        PRO FIGHT . 3×2 mn (1Extra Round) . + 95kg<br>
                        Vainqueur : Anthony REA par KO1
                    </p>
                    <p>
                        PRO FIGHT . 3×2 mn (1Extra Round) . -70kg<br>
                        Vainqueur : Philippe SALMON KO1
                    </p>
                    <p>
                        PRO FIGHT . 3×2 mn (1Extra Round) . -95kg<br>
                        Vainqueur : Zinedine Hameur Lain aux points
                    </p>

                    <h3>SUPERFIGHT</h3>
                    <p>
                        K-1 . 4×2 mn . +100kg<br>
                        Vainqueur : Nicolas WAMBA par KO4
                    </p>

                    <h3>SUPERFIGHT (FÉMININ)</h3>
                    <p>
                        K-1 . 4×2 mn . -58,500kg<br>
                        Vainqueur : Alena Ola aux points
                    </p>
                    <p>
                        K-1 . 4×2 mn . +100kg<br>
                        Vainqueur : Luca PANTO aux points
                    </p>

                    <h3>TOURNOI MASTERFIGHT</h3>
                    <p>
                        Finale PRO FIGHT . 3×2 mn (1Extra Round) . -82kg<br>
                        Vainqueur : Yoan KONGOLO par KO2
                    </p>
                    <p>
                        Demi finale PRO FIGHT . 3×2 mn (1Extra Round) . -82kg<br>
                        Vainqueur : Yoan KONGOLO aux points
                    </p>
                    <p>
                        Demi finale PRO FIGHT . 3×2 mn (1Extra Round) . -82kg<br>
                        Vainqueur : Francky BRUCTER aux points
                    </p>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                Retour aux editions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2014')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2014.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    <h1 class="title--translated">Résultats 2014</h1>

                    <p>
                        + 110.600 KG<br>
                        Victoire Jérôme Le Banner (Fra) par KO2
                    </p>
                    <p>
                        + 110.600 KG<br>
                        Victoire Freddy Kemayo (Fra) arr arbitre 2e
                    </p>
                    <p>
                        -96.400 KG<br>
                        Victoire Vladimir Mineev (Russie) aux Points
                    </p>
                    <p>
                        -110.600 KG<br>
                        Victoire Nicolas Wamba (Fra) par KO2
                    </p>
                    <p>
                        -63.500 KG<br>
                        Victoire Maneenoi Ekkarit (Tha) par KO1
                    </p>
                    <p>
                        -96.400 KG<br>
                        Victoire Filip Verlinden (Bel) aux points
                    </p>
                    <p>
                        -66.100 KG<br>
                        Victoire Samsamut Kietchongkao (Tha) aux points
                    </p>
                    <p>
                        -80.500 KG<br>
                        Victoire Yohann Kongolo (Sui) aux points
                    </p>
                    <p>
                        -58.200 KG<br>
                        Victoire Taehiran Chommanee (Tha) aux points
                    </p>


                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                Retour aux editions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2015')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2015.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    <h1 class="title--translated">Résultats 2015</h1>

                    <h3>KICK-BOXING</h3>

                    <p>
                        75KG<br>
                        Sharos Huyer bat Bakari Tounkara aux points
                    </p>
                    <p>
                        100KG<br>
                        Frank Munoz bat Zinedine Hameur Lain  aux points
                    </p>
                    <p>
                        120KG<br>
                        Fabrice Aurieng bat Yuksel Ayadi aux points
                    </p>
                    <p>
                        95KG<br>
                        Alexey Papin bat Danyo Ilunga aux points
                    </p>
                    <p>
                        93KG<br>
                        Alexander Vezhevatov bat Filip Verlinden aux points
                    </p>

                    <h3>CHAMPIONNAT DU MONDE  – WKN</h3>
                    <p>
                        120 KG<br>
                        Jerome LEBANNER bat Karl ROBERSON aux points
                    </p>

                    <h3>MUAYTHAI</h3>
                    <p>
                        71 KG<br>
                        Yodwicha Por Boonsit (THA) bat aux pts Jimmy Viennot (F)
                    </p>
                    <p>
                        77 KG<br>
                        Yohan LIDON bat Jonathan OLIVEIRA par TKO3
                    </p>

                    <h3>CHAMPIONNAT DU MONDE  – WMC EN 52KG</h3>
                    <p>Lizzie LARGILLIERE bat Petchoydying MOR par abandon à l’appel de R5</p>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                Retour aux editions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2016')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2016.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    <h1 class="title--translated">Résultats 2016</h1>

                    <h3>SUPERFIGHT . MUAYTHAI . 3×3 MN . -67KG</h3>

                    <p>
                        Vainqueur : Dylan Salvador par TKO2
                    </p>

                    <h3>500KG TOURNAMENT . DEMI FINALE . 3×3 MN . K-1 RULES . +110KG</h3>
                    <p>
                        Vainqueur : Thomas Vanneste aux points
                    </p>

                    <h3>500KG TOURNAMENT . DEMI FINALE . 3×3 MN . K-1 RULES . +110KG</h3>
                    <p>
                        Vainqueur : Tomas Mozny aux points
                    </p>

                    <h3>SUPERFIGHT . K-1 RULES . 3×3 MN . -96KG</h3>
                    <p>
                        Vainqueur : Mikhael Tiuterev aux points
                    </p>

                    <h3>CHAMPIONNAT DU MONDE WMC . MUAYTHAI . 5×3 MN . -57,200KG</h3>
                    <p>Vainqueur : Taiheran Chomanee aux points</p>

                    <h3>SUPERFIGHT . K-1 RULES . 3×3 MN . -96KG</h3>
                    <p>Vainqueur : Stéphane Susperregui aux points</p>

                    <h3>500KG TOURNAMENT . DEMI FINALE . 3×3 MN . K-1 RULES . +110KG</h3>
                    <p>Vainqueur : Tomas Mozny aux points</p>

                    <h3>CHAMPIONNAT DU MONDE WKN . K-1 RULES . 5×3 MN . -76,600KG</h3>
                    <p>Vainqueur : Yohan Lidon aux points</p>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                Retour aux editions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($slug == 'fight-night-2017')

        <section class="results_section">
            <div class="container-fluid">
                <div class="img_container">
                    <img src="/img/results/2017.jpg" alt="About us banner">
                </div>
                <div class="results_container jeans_bg_ragged">
                    <h1 class="title--translated">Résultats 2017</h1>

                    <h3>CHAMPIONNAT DU MONDE WKN . K-1  (79,4 KG)</h3>
                    <p>Yohan LIDON bat Florian KROGER par KO au round 4 (highkick)</p>

                    <h3>SUPERFIGHT . MUAYTHAI</h3>
                    <p>Umar SEMATA bat Evgeny KURAVSKOI par décision</p>

                    <h3>SUPERFIGHT . K-1</h3>
                    <p>Grégory TONY bat Bob SAPP par KO au round 1</p>
                    <p>Mikhail CHALYKH  bat Phillip VERLINDEN par décision</p>
                    <p>Stéphane SUSPERREGUI bat Danyo ILUNGA par décision (unanime)</p>
                    <p>Tomas MOZNY bat Daniel SAM par décision</p>
                    <p>Tomas MOZNY bat Daniel SAM par décision</p>
                    <p>Mallaury KALASHNIKOFF bat Marina SPASIC par décision (unanime)</p>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('editions') }}" class="red_btn">
                                Retour aux editions
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@stop

@section('js')

@stop