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

mix.js([
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/script.js',
], 'public/js')
    .styles([
        'resources/css/style.css',
        'resources/css/bootstrap.min.css',
        'resources/css/header.css',
        'resources/css/fullpage.min.css',
        'resources/css/about_game.css'
    ], 'public/css/all.css')
