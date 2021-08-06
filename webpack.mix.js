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
mix.copy('node_modules/dropzone/dist','public/vendor/dropzone')
mix.copy('node_modules/@fortawesome/fontawesome-pro','public/vendor/fontawesome')
mix.copy('node_modules/bootstrap/dist','public/vendor/bootstrap')
mix.copy('node_modules/filepond/','public/vendor/filepond')
mix.copy('node_modules/jquery/dist','public/vendor/jquery')


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]).sass('resources/scss-core-ui-pro4/style.scss', 'public/css');


if (mix.inProduction()) {
    mix.version();
}
