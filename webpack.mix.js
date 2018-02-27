let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.styles([
    'resources/assets/sass/libraries/bootstrap.css',
    'resources/assets/sass/libraries/select2.min.css',
    'resources/assets/sass/libraries/fontawesome/css/font-awesome.css',
    'resources/assets/sass/libraries/flickity.css',
    'resources/assets/sass/libraries/simplebar.css',
    'resources/assets/sass/libraries/datepicker.css',
    'resources/assets/sass/libraries/slick.css',
    'resources/assets/sass/libraries/fancybox.css',
    'resources/assets/sass/libraries/cubeportfolio.css',
    'resources/assets/sass/libraries/tooltipster.bundle.min.css',
    'public/css/custom_icons/style.css'
], 'public/css/libraries.css');


mix.scripts([
    'resources/assets/js/includes/functions.js',
    'resources/assets/js/includes/scripts.js'
], 'public/js/app.js');

mix.scripts([
    'resources/assets/js/includes/index.js'
], 'public/js/index.js');

mix.scripts([
    'resources/assets/js/includes/gallery.js'
], 'public/js/gallery.js');

mix.scripts([
    'resources/assets/js/libraries/jquery-3.1.1.min.js',
    'resources/assets/js/libraries/jquery-ui.min.js',
    'resources/assets/js/libraries/bootstrap.js',
    'resources/assets/js/libraries/select2.min.js',
    'resources/assets/js/libraries/datepicker.js',
    'resources/assets/js/libraries/slick.min.js',
    'resources/assets/js/libraries/fancybox.js',
    'resources/assets/js/libraries/flickity.js',
    'resources/assets/js/libraries/snap.svg.js',
    'resources/assets/js/libraries/cubeportfolio.js',
    'resources/assets/js/libraries/tooltipster.bundle.min.js'
], 'public/js/libraries.js');


mix.options({
    processCssUrls: false
});