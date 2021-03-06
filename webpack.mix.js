const mix = require("laravel-mix");
const BundleAnalyzerPlugin = require("webpack-bundle-analyzer")
  .BundleAnalyzerPlugin;

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
  // .webpackConfig({
  //   plugins: [new BundleAnalyzerPlugin()],
  // })
  .js("resources/js/app.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .styles(
    [
      "node_modules/normalize.css/normalize.css",
      "node_modules/bootstrap/dist/css/bootstrap.min.css",
      "node_modules/swiper/css/swiper.min.css",
      "node_modules/spinkit/spinkit.min.css",
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
      "node_modules/cleave.js/dist/cleave.min.js",
      "node_modules/cleave.js/dist/addons/cleave-phone.ca.js",
      "node_modules/mobile-detect/mobile-detect.min.js",
      "node_modules/lazysizes/lazysizes.min.js",
      "public/js/vendor/smooth-scroll.js",
      "public/js/app.js",
    ],
    "public/js/all.js"
  )
  .webpackConfig({
    devtool: "source-map",
  })
  .options({
    processCssUrls: false,
  })
  .browserSync(process.env.APP_URL);
