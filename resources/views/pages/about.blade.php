@extends('layouts.app')

@section('content')
    <section class="about_section">
        <div class="container-fluid">
            <div class="img_container">
                <img src="/img/about.png" alt="About us banner">
            </div>
            <div class="about_container jeans_bg">
                <h1 class="title--translated">About</h1>
                <p>{{ trans('lang.about_text1') }}</p>

                <p>{{ trans('lang.about_text2') }}</p>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop