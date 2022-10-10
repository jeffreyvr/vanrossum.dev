let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('tailwindcss'),
]);

// mix.webpackConfig({
//   stats: {
//     children: true
//   }
// });

// if (mix.inProduction()) {
  mix
    .version();
// }
