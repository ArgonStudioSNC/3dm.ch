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

 mix.sass('resources/sass/website.scss', 'public/css')
    .js('resources/js/website.js', 'public/js')
    .babel([
         'resources/js/vanilla/website.js',
         'resources/js/vanilla/jquery.parallax.min.js'
     ], 'public/js/website.vanilla.js')
    .options({
          processCssUrls: false
      });

 mix.sass('resources/sass/rendersurfer.scss', 'public/css')
    .js('resources/js/rendersurfer.js', 'public/js').extract(['vue']);

 if (mix.inProduction()) {
     mix.version();
 }
