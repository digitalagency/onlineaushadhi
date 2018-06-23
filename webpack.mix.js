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

mix.js([
    'resources/assets/js/app.js',
    'resources/assets/js/jquery.material.form.js',
    'resources/assets/js/jquery.masonry.min.js',
    'resources/assets/js/isotope.pkgd.min.js',
    'resources/assets/js/jquery.validate.min.js',
    'node_modules/jquery-file-upload/js/jquery.uploadfile.js',
    'node_modules/jquery-ui/ui/widgets/autocomplete.js',
    'resources/assets/js/custom.js'
], 'public/js')
    .extract(['jquery']);

mix.sass('resources/assets/sass/app.scss', '../resources/assets/css/app.css')
    .styles([
        'resources/assets/css/app.css',
        'resources/assets/css/modify.css',
        'node_modules/jquery-file-upload/css/uploadfile.custom.css',
        'node_modules/jquery-ui/themes/base/autocomplete.css'
    ], 'public/css/app.css');

mix.copyDirectory('resources/assets/img', 'public/img');
//if (mix.inProduction()) {
    mix.version();
//}
