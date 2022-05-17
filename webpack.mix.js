let mix = require('laravel-mix');

mix
  .js('resources/js/app.js', 'public/js')
  // .copyDirectory('./node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
  .postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss')
  ]);

// mix.webpackConfig({
//   stats: {
//     children: true
//   }
// });

if (mix.inProduction()) {
  mix
    .version();
}
