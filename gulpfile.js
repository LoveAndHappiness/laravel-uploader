var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.less('app.less');

	// 0. Scripte Kopieren (working)
	mix.copy('bower_components/bootstrap-validator/js/validator.js', 'resources/js/validator.js')
	   .copy('bower_components/dropzone/dist/dropzone.js', 'resources/js/dropzone.js')
	   .copy('bower_components/dropzone/dist/dropzone.css', 'resources/assets/less/dropzone.less');

	mix.scripts([
		'jquery-2.1.1.min.js', 
		'bootstrap.js', 
		'validator.js', 
		'dropzone.js', 
		'main.js'], 'public/js/app.js', 'resources/assets/js');

});
