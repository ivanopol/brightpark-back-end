const mix = require('laravel-mix');
require('laravel-mix-copy-watched');

mix
    .setPublicPath('public/build')
    .setResourceRoot('build')
    .js('resources/js/app.js', 'js')
    .sass('resources/sass/app2.scss', 'css/app2.css')
    .version();

    if (mix.inProduction()) {
        mix.copyDirectory('resources/images', 'public/build/images')
    } else {
     //   mix.copyWatched('resources/images', 'public/build/images',  { base: 'resources/images' })
        mix.browserSync({
            open: false,
            watchTask: true,
            proxy: 'http://0.0.0.0',
            port: 8081,
            browser: "chrome"
        });
    }



