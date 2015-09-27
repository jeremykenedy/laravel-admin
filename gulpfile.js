/*
 |--------------------------------------------------------------------------
 | Asset Managment Controller
 |--------------------------------------------------------------------------
 | 1 = ON
 | 2 = OFF
 |--------------------------------------------------------------------------
 */

var enable_compile_admin 	= 1;
var enable_comile_admin_css	= 1;
var enable_comile_admin_js	= 0;

var enable_compile_app		= 1;
var enable_comile_app_css	= 1;
var enable_comile_app_js	= 1;

var enable_unit_testing 	= 0;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |--------------------------------------------------------------------------
 */

var gulp = require('gulp');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 |    ###     ######   ######  ######## ########  ######
 |   ## ##   ##    ## ##    ## ##          ##    ##    ##
 |  ##   ##  ##       ##       ##          ##    ##
 | ##     ##  ######   ######  ######      ##     ######
 | #########       ##       ## ##          ##          ##
 | ##     ## ##    ## ##    ## ##          ##    ##    ##
 | ##     ##  ######   ######  ########    ##     ######
 |--------------------------------------------------------------------------
 | Gulp Asset Management
 |--------------------------------------------------------------------------
 | Copy any needed files.
 | Do a 'gulp copyfiles' after bower updates
 |--------------------------------------------------------------------------
 */
gulp.task("copyfiles", function() {

  // Copy jQuery, Bootstrap, and FontAwesome
  gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
      .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/bootstrap/less/**")
      .pipe(gulp.dest("resources/assets/less/bootstrap"));

  gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
      .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
      .pipe(gulp.dest("public/assets/fonts"));

  gulp.src("vendor/bower_dl/fontawesome/less/**")
      .pipe(gulp.dest("resources/assets/less/fontawesome"));

  gulp.src("vendor/bower_dl/fontawesome/fonts/**")
      .pipe(gulp.dest("public/assets/fonts"));


  // Copy AdminLTE Files
    gulp.src("vendor/bower_dl/parallax.js/parallax.js")
     .pipe(gulp.dest('resources/assets/js/'));

  // Copy datatables
  var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

  gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
      .pipe(gulp.dest('resources/assets/js/'));

  gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
      .pipe(rename('dataTables.bootstrap.less'))
      .pipe(gulp.dest('resources/assets/less/others/'));

  gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.js')
      .pipe(gulp.dest('resources/assets/js/'));

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
	 |    ###    ########  ##     ## #### ##    ##
	 |   ## ##   ##     ## ###   ###  ##  ###   ##
	 |  ##   ##  ##     ## #### ####  ##  ####  ##
	 | ##     ## ##     ## ## ### ##  ##  ## ## ##
	 | ######### ##     ## ##     ##  ##  ##  ####
	 | ##     ## ##     ## ##     ##  ##  ##   ###
	 | ##     ## ########  ##     ## #### ##    ##
	 |--------------------------------------------------------------------------
	 */
	//PROCESS ADMIN ASSETS
	if (enable_compile_admin) {

		// COMBINE ADMIN SCRIPTS
		if (enable_comile_admin_js) {
			mix.scripts([
					'js/jquery.js',
					'js/bootstrap.js'
			    ],
				'public/assets/js/admin.js',
				'resources/assets'
			);
		}
		if (enable_comile_admin_css) {
			// COMPILE ADMIN LESS
			mix.less('admin.less', 'public/assets/css/admin.css');
		}
	}

	/*
	 |--------------------------------------------------------------------------
	 |    ###    ########  ########
	 |   ## ##   ##     ## ##     ##
	 |  ##   ##  ##     ## ##     ##
	 | ##     ## ########  ########
	 | ######### ##        ##
	 | ##     ## ##        ##
	 | ##     ## ##        ##
	 |--------------------------------------------------------------------------
	 */
	// PROCESS APP ASSETS
	if (enable_compile_app) {

		//COMBINE APP SCRIPTS
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

		// COMIPILE APP SASS/SCSS
		if (enable_comile_app_css) {
			mix.sass('app.scss', 'public/assets/css/app.css');
		}
	}

	/*
	 |--------------------------------------------------------------------------
	 | ######## ########  ######  ######## #### ##    ##  ######
	 |    ##    ##       ##    ##    ##     ##  ###   ## ##    ##
	 |    ##    ##       ##          ##     ##  ####  ## ##
	 |    ##    ######    ######     ##     ##  ## ## ## ##   ####
	 |    ##    ##             ##    ##     ##  ##  #### ##    ##
	 |    ##    ##       ##    ##    ##     ##  ##   ### ##    ##
	 |    ##    ########  ######     ##    #### ##    ##  ######
	 |--------------------------------------------------------------------------
	 */
	// START phpUnit FOR UNIT TESTING
	if (enable_unit_testing) {
		mix.phpUnit();
	}

});

