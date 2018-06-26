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
let cssOutputDir = 'public/css/hpds.css';


if (mix.inProduction()) {
    let jsOutputDir = 'public/js/hpds.js';//'/mnt/c/Users/emg33/Code/workforceblog/source/supply/hpds.js';
    cssOutputDir = 'public/css/hpds.css';
  } 

mix.js('resources/assets/js/main.js', jsOutputDir)
    .styles([
        'resources/assets/css/normalize.css',
        'resources/assets/css/skeleton-no-grid.css',
        'resources/assets/css/main.css'
    ], cssOutputDir);
