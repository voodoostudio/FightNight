<?php
/**
 * Created by PhpStorm.
 * User: IC
 * Date: 2/20/18
 * Time: 4:32 PM
 */
?>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="/img/logo.png" alt="Fight Night logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('index') }}">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ route('about') }}">About</a>
                    <a class="nav-item nav-link" href="{{ route('about') }}">Editions</a>
                    <a class="nav-item nav-link" href="{{ route('about') }}">Billeterie</a>
                    <a class="nav-item nav-link" href="{{ route('gallery') }}">Galerie</a>
                    <a class="nav-item nav-link" href="{{ route('partners') }}">Partenaires</a>
                    <a class="nav-item nav-link" href="{{ route('press') }}">Presse</a>
                    <a class="nav-item nav-link" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</header>