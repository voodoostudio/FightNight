@php
    $lang = LaravelLocalization::getCurrentLocale();
@endphp
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="/img/logo.png" alt="Fight Night logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == '/' || Route::getCurrentRoute()->uri == $lang) ? 'active' : '' }}" href="{{ route('index') }}">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'about' || Route::getCurrentRoute()->uri == $lang . '/about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'editions' || Route::getCurrentRoute()->uri == $lang . '/editions') ? 'active' : '' }}" href="{{ route('editions') }}">Editions</a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'tickets' || Route::getCurrentRoute()->uri == $lang . '/tickets') ? 'active' : '' }}" href="{{ route('tickets') }}">Billeterie</a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'gallery' || Route::getCurrentRoute()->uri == $lang . '/galleries') ? 'active' : '' }}" href="{{ route('galleries') }}">Galerie</a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'partners' || Route::getCurrentRoute()->uri == $lang . '/partners') ? 'active' : '' }}" href="{{ route('partners') }}">Partenaires</a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'press' || Route::getCurrentRoute()->uri == $lang . '/press') ? 'active' : '' }}" href="{{ route('press') }}">Presse</a>
                    <a class="nav-item nav-link {{ (Route::getCurrentRoute()->uri == 'contact' || Route::getCurrentRoute()->uri == $lang . '/contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</header>