let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js/temp.js')
   .sass('resources/assets/sass/app.scss', 'public/css/temp.css');
   
mix.styles([
	'public/css/temp.css',
	'node_modules/font-awesome/css/font-awesome.min.css',
	'uikit/dist/css/uikit.min.css',
	'node_modules/foundation-sites/dist/css/foundation.min.css',
	'semantic/dist/semantic.min.css'
], 'public/css/app.css');

mix.combine([
	'node_modules/jquery/dist/jquery.min.js',
	'public/js/temp.js',
	'node_modules/foundation-sites/dist/js/foundation.min.js',
	'uikit/dist/js/uikit.min.js',
	'uikit/dist/js/uikit-icons.min.js',
	'semantic/dist/semantic.min.js'
], 'public/js/app.js');

mix.copy('semantic/dist/themes/', 'public/css/themes/');