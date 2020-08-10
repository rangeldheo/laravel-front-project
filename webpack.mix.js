const mix = require('laravel-mix');

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

mix.scripts('vendor/components/jquery/jquery.min.js', 'public/js/jquery.min.js')
    .scripts('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js')
    .scripts('node_modules/sweetalert2/dist/sweetalert2.all.min.js', 'public/js/sweetalert2.all.min.js')
    .sass('resources/sass/app.scss', 'public/css/bootstrap.css');

