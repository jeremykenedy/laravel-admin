/*
 |--------------------------------------------------------------------------
 |    ###    ########   #######  ##     ## ########
 |   ## ##   ##     ## ##     ## ##     ##    ##
 |  ##   ##  ##     ## ##     ## ##     ##    ##
 | ##     ## ########  ##     ## ##     ##    ##
 | ######### ##     ## ##     ## ##     ##    ##
 | ##     ## ##     ## ##     ## ##     ##    ##
 | ##     ## ########   #######   #######     ##
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |--------------------------------------------------------------------------
 | ########    ###    ########  ##       ########     #######  ########     ######   #######  ##    ## ######## ######## ##    ## ########  ######
 |    ##      ## ##   ##     ## ##       ##          ##     ## ##          ##    ## ##     ## ###   ##    ##    ##       ###   ##    ##    ##    ##
 |    ##     ##   ##  ##     ## ##       ##          ##     ## ##          ##       ##     ## ####  ##    ##    ##       ####  ##    ##    ##
 |    ##    ##     ## ########  ##       ######      ##     ## ######      ##       ##     ## ## ## ##    ##    ######   ## ## ##    ##     ######
 |    ##    ######### ##     ## ##       ##          ##     ## ##          ##       ##     ## ##  ####    ##    ##       ##  ####    ##          ##
 |    ##    ##     ## ##     ## ##       ##          ##     ## ##          ##    ## ##     ## ##   ###    ##    ##       ##   ###    ##    ##    ##
 |    ##    ##     ## ########  ######## ########     #######  ##           ######   #######  ##    ##    ##    ######## ##    ##    ##     ######
 |--------------------------------------------------------------------------
 | TABLE OF CONTENTS
 |--------------------------------------------------------------------------
 | 1. Commands Reference
 | 2. Controllers
 | 3. Assets
 | 4. Admin CSS & JS
 | 5. APP CSS & JS
 | 6. PHPUnit Testing
 |--------------------------------------------------------------------------
 */
var gulp = require('gulp'),
	elixir = require('laravel-elixir'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del'),
    less = require('gulp-less'),
    lessToScss = require('gulp-less-to-scss');

/*
 |--------------------------------------------------------------------------
 |   ##                  ######   #######  ##     ## ##     ##    ###    ##    ## ########   ######
 | ####                 ##    ## ##     ## ###   ### ###   ###   ## ##   ###   ## ##     ## ##    ##
 |   ##                 ##       ##     ## #### #### #### ####  ##   ##  ####  ## ##     ## ##
 |   ##      #######    ##       ##     ## ## ### ## ## ### ## ##     ## ## ## ## ##     ##  ######
 |   ##                 ##       ##     ## ##     ## ##     ## ######### ##  #### ##     ##       ##
 |   ##                 ##    ## ##     ## ##     ## ##     ## ##     ## ##   ### ##     ## ##    ##
 | ######                ######   #######  ##     ## ##     ## ##     ## ##    ## ########   ######
 |--------------------------------------------------------------------------
 |--------------------------------------------------------------------------
 | Terminal/Bash Commands
 |--------------------------------------------------------------------------
 | sudo gulp copyfile 		<= 	Runs Gulp to copy assets
 | sudo gulp 				<= 	Runs Gulp to compile assets
 |--------------------------------------------------------------------------
 */

/*
 |--------------------------------------------------------------------------
 |  #######                 ######   #######  ##    ## ######## ########   #######  ##       ##       ######## ########
 | ##     ##               ##    ## ##     ## ###   ##    ##    ##     ## ##     ## ##       ##       ##       ##     ##
 |        ##               ##       ##     ## ####  ##    ##    ##     ## ##     ## ##       ##       ##       ##     ##
 |  #######     #######    ##       ##     ## ## ## ##    ##    ########  ##     ## ##       ##       ######   ########
 | ##                      ##       ##     ## ##  ####    ##    ##   ##   ##     ## ##       ##       ##       ##   ##
 | ##                      ##    ## ##     ## ##   ###    ##    ##    ##  ##     ## ##       ##       ##       ##    ##
 | #########                ######   #######  ##    ##    ##    ##     ##  #######  ######## ######## ######## ##     ##
 |--------------------------------------------------------------------------
 |--------------------------------------------------------------------------
 | Asset Management Controller - Choose which assets to compile when running gulp
 |--------------------------------------------------------------------------
 | 1 = ON
 | 2 = OFF
 |--------------------------------------------------------------------------
 */

var enable_compile_admin 	= 1;
var enable_comile_admin_css	= 1;
var enable_comile_admin_js	= 0;

var enable_compile_app		= 0;
var enable_comile_app_css	= 0;
var enable_comile_app_js	= 0;

var enable_unit_testing 	= 0;

/*
 |--------------------------------------------------------------------------
 |  #######                   ###     ######   ######  ######## ########  ######
 | ##     ##                 ## ##   ##    ## ##    ## ##          ##    ##    ##
 |        ##                ##   ##  ##       ##       ##          ##    ##
 |  #######     #######    ##     ##  ######   ######  ######      ##     ######
 |        ##               #########       ##       ## ##          ##          ##
 | ##     ##               ##     ## ##    ## ##    ## ##          ##    ##    ##
 |  #######                ##     ##  ######   ######  ########    ##     ######
 |--------------------------------------------------------------------------
 | Gulp Asset Management
 |--------------------------------------------------------------------------
 | Copy any needed files.
 | Do a 'gulp copyfiles' after bower updates
 |--------------------------------------------------------------------------
 */
gulp.task("copyfiles", function() {

	// Copy AdminLTE Asset Files
	gulp.src("vendor/bower_dl/adminLTE/bootstrap/**")
		.pipe(gulp.dest("resources/assets/adminlte/bootstrap"));

	gulp.src("vendor/bower_dl/adminLTE/build/**")
		.pipe(gulp.dest("resources/assets/adminlte/build"));

	gulp.src("vendor/bower_dl/adminLTE/dist/**")
		.pipe(gulp.dest("resources/assets/adminlte/dist"));

	gulp.src("vendor/bower_dl/adminLTE/pages/**")
		.pipe(gulp.dest("resources/assets/adminlte/pages"));

	gulp.src("vendor/bower_dl/adminLTE/plugins/**")
		.pipe(gulp.dest("resources/assets/adminlte/plugins"));

	gulp.src("vendor/bower_dl/adminLTE/starter.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/starter.html"));

	gulp.src("vendor/bower_dl/adminLTE/index.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/example1.html"));

	gulp.src("vendor/bower_dl/adminLTE/index2.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/example2.html"));

	// // Copy jQuery, Bootstrap, and FontAwesome
	// gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
	// 	.pipe(gulp.dest("resources/assets/js/"));

	// gulp.src("vendor/bower_dl/bootstrap/less/**")
	// 	.pipe(gulp.dest("resources/assets/less/bootstrap-less"));

	// gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
	// 	.pipe(gulp.dest("resources/assets/js/"));

	// gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
	// 	.pipe(gulp.dest("public/assets/fonts"));

	// gulp.src("vendor/bower_dl/fontawesome/less/**")
	// 	.pipe(gulp.dest("resources/assets/less/fontawesome"));

	// gulp.src("vendor/bower_dl/fontawesome/fonts/**")
	// 	.pipe(gulp.dest("public/assets/fonts"));

  	// Copy datatables
  	// var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

  	// gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
   //    	.pipe(gulp.dest('resources/assets/js/'));

  	// gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
   //    	.pipe(rename('dataTables.bootstrap.less'))
   //    	.pipe(gulp.dest('resources/assets/less/others/'));

  	// gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.js')
   //    	.pipe(gulp.dest('resources/assets/js/'));

});

/*
 |--------------------------------------------------------------------------
 | Default gulp is to run this elixir stuff
 |--------------------------------------------------------------------------
 | Do a 'gulp' to update assets
 |--------------------------------------------------------------------------
 */
elixir(function(mix) {
	/*
	 |--------------------------------------------------------------------------
	 | ##                         ###    ########  ##     ## #### ##    ##
	 | ##    ##                  ## ##   ##     ## ###   ###  ##  ###   ##
	 | ##    ##                 ##   ##  ##     ## #### ####  ##  ####  ##
	 | ##    ##     #######    ##     ## ##     ## ## ### ##  ##  ## ## ##
	 | #########               ######### ##     ## ##     ##  ##  ##  ####
	 |       ##                ##     ## ##     ## ##     ##  ##  ##   ###
	 |       ##                ##     ## ########  ##     ## #### ##    ##
	 |--------------------------------------------------------------------------
	 */
	//PROCESS ADMIN ASSETS
	if (enable_compile_admin) {

		// COMBINE ADMIN SCRIPTS - ADMIN JS
		if (enable_comile_admin_js) {
			mix.scripts([
					'js/jquery.js',
					'js/bootstrap.js',
			    ],
				'public/assets/js/admin.js',
				'resources/assets'
			);
		}

		// COMPILE ADMIN LESS - ADMIN CSS
		if (enable_comile_admin_css) {
			mix.less('admin.less', 'public/assets/css/admin.css');
		}

	}

	/*
	 |--------------------------------------------------------------------------
	 | ##                         ###    ########  ########
	 | ##    ##                  ## ##   ##     ## ##     ##
	 | ##    ##                 ##   ##  ##     ## ##     ##
	 | ##    ##     #######    ##     ## ########  ########
	 | #########               ######### ##        ##
	 |       ##                ##     ## ##        ##
	 |       ##                ##     ## ##        ##
	 |--------------------------------------------------------------------------
	 */
	// PROCESS APP ASSETS
	if (enable_compile_app) {

		//COMBINE APP SCRIPTS - APP JS
		if (enable_comile_app_js) {
		    mix.scripts([
					'js/jquery.js',
					'js/bootstrap.js',
					'js/app.js',
			    ],
			    'public/assets/js/app.js',
			    'resources/assets'
		   	);
		}

		// COMIPILE APP SASS/SCSS - APP CSS
		if (enable_comile_app_css) {
			mix.sass('app.scss', 'public/assets/css/app.css');
		}
	}

	/*
	 |--------------------------------------------------------------------------
	 | ########               ######## ########  ######  ######## #### ##    ##  ######
	 | ##                        ##    ##       ##    ##    ##     ##  ###   ## ##    ##
	 | ##                        ##    ##       ##          ##     ##  ####  ## ##
	 | #######     #######       ##    ######    ######     ##     ##  ## ## ## ##   ####
	 |       ##                  ##    ##             ##    ##     ##  ##  #### ##    ##
	 | ##    ##                  ##    ##       ##    ##    ##     ##  ##   ### ##    ##
	 |  ######                   ##    ########  ######     ##    #### ##    ##  ######
	 |--------------------------------------------------------------------------
	 */
	// START phpUnit FOR UNIT TESTING
	if (enable_unit_testing) {
		mix.phpUnit();
	}

});

