const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/app.scss', 'public/css')
   .tailwind('./tailwind.config.js')
   .copyDirectory('./node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');

if (mix.inProduction()) {
  mix
   .purgeCss();
}

mix.version();
