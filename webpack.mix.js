const mix = require('laravel-mix');
var path = require('path');

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

mix
    .autoload({
        'jquery': [
            '$', 'window.$', 'jQuery', 'window.jQuery'
        ]
    })

    .sass('resources/sass/website.scss', 'css')
    .sass('resources/sass/rendersurfer.scss', 'css')
    .sass('resources/sass/calculator.scss', 'css')

    .js('resources/js/website.js', 'js')
    .js('resources/js/rendersurfer.js', 'js')
    .js('resources/js/calculator.js', 'js')

    .vue({ version: 2, extractStyles: false})

    .alias({
        '@': path.resolve('resources/sass/'),
        '@js': path.resolve(__dirname, 'resources/js/')
    })

    .options({
        processCssUrls: false
    })

    .purifyCss(true)

    .extract(['lodash', 'jquery', 'vue'])
    .sourceMaps()

    .browserSync({
        proxy: 'lvh.me:8000'
    });

//Foundation Site 6 is not ES5 ready
mix
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
        }
    });

if (mix.inProduction()) {
    mix.version();
}
