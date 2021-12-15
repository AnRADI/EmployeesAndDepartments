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
let production = mix.inProduction();

mix.js('resources/js/app.js', 'public/js')
    .copy('resources/images', 'public/images')
    .sass('resources/sass/app.scss', 'public/css').options({
        processCssUrls: false
    })
    .webpackConfig(require('./webpack.config'))
    .sourceMaps(!production, 'source-map')
    .disableNotifications()
    .browserSync({
        proxy: 'employees-departments',
        host: 'employees-departments',
        notify: false,
        open: 'external'
    });

if (production) {
    mix.version(['public/images', 'public/storage']);
    //mix.version(['public/images', 'public/Admin/**/*.{js,css,png,jpg,gif,svg}']);
}