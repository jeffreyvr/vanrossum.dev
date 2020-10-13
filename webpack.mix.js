const mix = require('laravel-mix');

mix
  .js('resources/js/app.js', 'public/js')
  .copyDirectory('./node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('postcss-url'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),
  ]);

if (mix.inProduction()) {
  mix
    .version();
}
