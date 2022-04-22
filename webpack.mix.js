let mix = require('laravel-mix');

mix.js('src/js/main.js', 'dist/')
   // .sass('src/scss/yc.scss', 'dist/')
   // .sass('src/scss/max.scss', 'dist/')
   .sass('src/scss/ph.scss', '/')

   .copy('src/images', 'dist/images/')
   .copy('src/fonts', 'dist/fonts/')
   .copy('src/lib-js', 'dist/lib-js/')
   .setPublicPath('dist')
   .options({
      processCssUrls: false
   });

