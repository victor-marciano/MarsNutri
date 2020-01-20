const mix = require('laravel-mix');

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
    .sass('resources/sass/app.scss', 'public/css');

    
mix.js('resources/js/auth.js', 'public/js')
    .sass('resources/sass/auth.scss', 'public/css/auth');

mix.sass('resources/sass/dashboard.scss', 'public/css/dashboard');
mix.scripts(
    [
        // 'resources/now-ui-dashboard-master/assets/js/plugins/perfect-scrollbar.jquery.min.js',        
        'resources/now-ui-dashboard-master/assets/js/now-ui-dashboard.js'        
    ],
    'public/js/dashboard/dashboard.js'
)

mix.scripts(
    [
        'resources/js/mdb.js'        
    ],
    'public/js/mdb.js'
);

// ESTILO DO PDF
mix.styles([
    'resources/css/dieta_pdf.css'
], 'public/css/pdf.css');

// mix.styles([
//     'resources/now-ui-dashboard-master/assets/'
// ])
