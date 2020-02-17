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

 mix.js('resources/js/rendersurfer.js', 'public/js')
     .webpackConfig({
      module: {
          rules: [
              {
                  test: /\.jsx?$/,
                  exclude: /node_modules(?!\/foundation-sites)|bower_components/,
                  use: [
                      {
                          loader: 'babel-loader',
                          options: Config.babel()
                      }
                  ]
              }
          ]
      },
      resolve: {
         alias: {
           '@': path.resolve('resources/sass')
         }
       }
    })
    .extract(['vue']).sourceMaps()
    .sass('resources/sass/rendersurfer.scss', 'public/css')

 if (mix.inProduction()) {
     mix.version();
 }
