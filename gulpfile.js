//var gulp = require('gulp');
var del = require('del');

var Elixir = require('laravel-elixir');

var Task = Elixir.Task;

Elixir.extend("remove", function(path) {

    new Task('remove', function() {
        return del(path)
    });
});
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

Elixir(function(mix) {
    mix.remove([
        'public/css',
        'public/js',
        'public/img',
        'public/fonts'
    ]);

    mix.styles([
        'base/bootstrap.css',
        'base/font-awesome.css'
    ], 'public/css/base.css')

    .styles([
        'custom/*.css'
    ], 'public/css/custom.css')

    .sass([
        'custom/*.scss'
    ], 'public/css/style.css')

    .copy([
        'resources/assets/fonts/base/FontAwesome.otf',
        'resources/assets/fonts/base/fontawesome-webfont.eot',
        'resources/assets/fonts/base/fontawesome-webfont.svg',
        'resources/assets/fonts/base/fontawesome-webfont.ttf',
        'resources/assets/fonts/base/fontawesome-webfont.woff',
        'resources/assets/fonts/base/fontawesome-webfont.woff2',
        'resources/assets/fonts/base/glyphicons-halflings-regular.svg',
        'resources/assets/fonts/base/glyphicons-halflings-regular.ttf',
        'resources/assets/fonts/base/glyphicons-halflings-regular.woff',
        'resources/assets/fonts/base/glyphicons-halflings-regular.woff2',
        'resources/assets/fonts/custom/*.{otf,eot,svg,ttf,woff,woff2}'

    ], 'public/fonts/')

    .copy([
        'resources/assets/img/custom/*.{png,jpg,jpeg}'
    ], 'public/img/')

    .scripts([
        'base/bootstrap.js',
        'base/base.js'
    ], 'public/js/base.js')

    .scripts([
        'custom/*.js'
    ], 'public/js/custom.js')
});
