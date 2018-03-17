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
                <a href="#" class="social facebook"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#" class="social instagram"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="#" class="lang">
                    <img src="/img/en_flag.png" alt="">
                </a>
            </li>
            <li>
                <a href="#" class="lang">
                    <img src="/img/fr_flag.png" alt="">
                </a>
            </li>
        </ul>
        <p>
            © FIGHT NIGHT Saint-Tropez. All Rights Reserved.
            <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
            <a href="{{ route('contact') }}">- Contact -</a>
        </p>
    </div>
</footer>