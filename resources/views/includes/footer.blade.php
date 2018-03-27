<?php
/**
 * Created by PhpStorm.
 * User: IC
 * Date: 2/20/18
 * Time: 4:32 PM
 */
?>

<footer>
    <div class="container-fluid">

        <ul class="links_list">
            <li>
                <a href="https://www.facebook.com/fightnightsttropez/" class="social facebook"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/fightnightstropez/" class="social instagram"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/fightnightst" class="social twitter"><i class="fab fa-twitter-square"></i></a>
            </li>

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $langItem)
                {{--<li>--}}
                    {{--<a href="{{ LaravelLocalization::getLocalizedURL($localeCode) }}" hreflang="{{$localeCode}}" class="lang {{ ($localeCode == App::getLocale()) ? 'active' : '' }}">--}}
                        {{--<img src="/img/{{ strtolower($langItem['native']) }}_flag.png" alt="">--}}
                    {{--</a>--}}
                {{--</li>--}}
            @endforeach
        </ul>
        <p>
            © FIGHT NIGHT Saint-Tropez. All Rights Reserved.
            <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
            <a href="{{ route('contact') }}">- Contact -</a>
        </p>
    </div>
</footer>