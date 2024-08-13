const mix = require('laravel-mix');

mix.js('src/resources/js/app.js', 'public/js')
    .sass('src/resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js');
