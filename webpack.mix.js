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

let jsOutputDir = 'public/js/hpds.js';
let cssOutputDir = 'public/js/hpds.js';

if (mix.inProduction()) {
    let jsOutputDir = 'public/js/hpds.js';
    cssOutputDir = 'public/js/hpds.js';
  } 

mix.js('resources/assets/js/main.js', jsOutputDir)
    .styles([
        'resources/assets/css/normalize.css',
        'resources/assets/css/skeleton.css',
        'resources/assets/css/main.css'
    ], cssOutputDir);
