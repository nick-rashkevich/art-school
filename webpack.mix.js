const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//  BLOG
mix.scripts([
    'templates/js/jquery.js',
    'templates/js/plugins.min.js',
    'templates/js/functions.js'
], 'public/js/blog/front.js')


mix.styles([
    'templates/css/bootstrap.css',
    'templates/style.css',
    'templates/css/dark.css',
    'templates/css/font-icons.css',
    'templates/css/animate.css',
    'templates/css/magnific-popup.css',
    'templates/css/custom.css',
], 'public/css/blog/front.css')

mix.copy('templates/css/fonts', 'public/css/blog/fonts');

//  MAIN PAGE

mix.scripts([
    'templates/js/jquery.js',
    'templates/js/plugins.min.js',
    'templates/js/functions.js'

], 'public/js/main-page/front.js')


mix.styles([
    'templates/demos/course/course.css',
    'templates/style.css',
    'templates/css/bootstrap.css',
    'templates/css/dark.css',
    'templates/css/font-icons.css',
    'templates/css/animate.css',
    'templates/css/magnific-popup.css',
    'templates/one-page/css/et-line.css',
    'templates/css/custom.css'

], 'public/css/main-page/front.css')

mix.copy('templates/css/fonts', 'public/css/main-page/fonts');

