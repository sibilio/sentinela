let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'tmp')
   .sass('resources/assets/sass/bootstrap.scss', 'tmp')
   .sass('resources/assets/sass/app.scss', 'tmp');

mix.styles([
      'public/tmp/bootstrap.css',
      'resources/assets/terceiros/sb-admin.css',
      'public/tmp/app.css',
      'public/tmp/font-awesome.css'
   ], 'public/css/app.css');
   
mix.scripts([
      'public/tmp/app.js'
   ], 'public/js/app.js');
   
mix.sourceMaps();
   