const mix = require("laravel-mix");

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
  .js("resources/js/app.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .styles(
    [
      "node_modules/normalize.css/normalize.css",
      "node_modules/bootstrap/dist/css/bootstrap.min.css",
      "node_modules/swiper/css/swiper.min.css",
      "public/css/app.css",
    ],
    "public/css/all.css"
  )
  .scripts(
    [
      "node_modules/jquery/dist/jquery.min.js",
      "node_modules/popper.js/dist/umd/popper.min.js",
      "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
      "node_modules/animejs/lib/anime.min.js",
      "node_modules/swiper/js/swiper.min.js",
      "public/js/app.js",
    ],
    "public/js/all.js"
  )
  .browserSync(process.env.APP_URL);
