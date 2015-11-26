/*
 If this style of commenting is frowned upon please let me know. Thanks.
 |--------------------------------------------------------------------------
 | Elixir Through Gulp Asset Management
 |--------------------------------------------------------------------------
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |--------------------------------------------------------------------------
 |  ######   #######  ##     ## ##     ##    ###    ##    ## ########   ######
 | ##    ## ##     ## ###   ### ###   ###   ## ##   ###   ## ##     ## ##    ##
 | ##       ##     ## #### #### #### ####  ##   ##  ####  ## ##     ## ##
 | ##       ##     ## ## ### ## ## ### ## ##     ## ## ## ## ##     ##  ######
 | ##       ##     ## ##     ## ##     ## ######### ##  #### ##     ##       ##
 | ##    ## ##     ## ##     ## ##     ## ##     ## ##   ### ##     ## ##    ##
 |  ######   #######  ##     ## ##     ## ##     ## ##    ## ########   ######
 |--------------------------------------------------------------------------
 | Terminal/Bash Commands
 |--------------------------------------------------------------------------
 | sudo gulp copyfile 		<= 	Runs Gulp to copy assets
 | sudo gulp 				<= 	Runs Gulp to compile assets
 |--------------------------------------------------------------------------
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
 |	 |	 1. Loads - Core and Plugin Preprocessors load calls
 |	 |	 2. Controllers - Choose your options
 |	 |	 3. Assets - Get and move preprocessor assets
 |	 |	 4. Admin CSS & JS - Admin CSS & JS Preproccessors
 |	 |	 5. APP CSS & JS - APP CSS & JS Preproccessors
 |	 |	 6. PHPUnit Testing - PHPUNIT Load Testing
 |--------------------------------------------------------------------------
 |--------------------------------------------------------------------------
 |   ##                 ##        #######     ###    ########   ######
 | ####                 ##       ##     ##   ## ##   ##     ## ##    ##
 |   ##                 ##       ##     ##  ##   ##  ##     ## ##
 |   ##      #######    ##       ##     ## ##     ## ##     ##  ######
 |   ##                 ##       ##     ## ######### ##     ##       ##
 |   ##                 ##       ##     ## ##     ## ##     ## ##    ##
 | ######               ########  #######  ##     ## ########   ######
 |--------------------------------------------------------------------------
 |--------------------------------------------------------------------------
 | Loads - Core and Plugin Preprocessors load calls
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
 |  #######                 ######   #######  ##    ## ######## ########   #######  ##       ##       ######## ########
 | ##     ##               ##    ## ##     ## ###   ##    ##    ##     ## ##     ## ##       ##       ##       ##     ##
 |        ##               ##       ##     ## ####  ##    ##    ##     ## ##     ## ##       ##       ##       ##     ##
 |  #######     #######    ##       ##     ## ## ## ##    ##    ########  ##     ## ##       ##       ######   ########
 | ##                      ##       ##     ## ##  ####    ##    ##   ##   ##     ## ##       ##       ##       ##   ##
 | ##                      ##    ## ##     ## ##   ###    ##    ##    ##  ##     ## ##       ##       ##       ##    ##
 | #########                ######   #######  ##    ##    ##    ##     ##  #######  ######## ######## ######## ##     ##
 |--------------------------------------------------------------------------
 |--------------------------------------------------------------------------
 | ASSET MANAGEMENT CONTROLLER - Choose which assets to compile when running gulp
 |--------------------------------------------------------------------------
 | 1 = ON
 | 2 = OFF
 |--------------------------------------------------------------------------
 */
	/* ADMIN -------------------------------------------------------------------*/
	var enable_compile_admin 		= 1;			// Compile Admin Assets?
	var enable_compile_admin_css	= 1;			// Compile Admin CSS?
	var enable_compile_admin_js		= 0;			// Compile Admin JS?

	/* LOGIN -------------------------------------------------------------------*/
	var enable_compile_login 		= 1;			// Compile Login Assets?
	var enable_compile_login_css	= 1;			// Compile Login CSS?
	var enable_compile_login_js		= 1;			// Compile Login JS?

	/* APP __-------------------------------------------------------------------*/
	var enable_compile_app			= 0;			// Compile App Assets?
	var enable_compile_app_css		= 0;			// Compile App CSS?
	var enable_compile_app_js		= 0;			// Compile App JS?

	/* PHPUNIT -----------------------------------------------------------------*/
	var enable_unit_testing 		= 0;			// Compile phpUnit Testing?

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
 | Gulp Asset Management - Create Gulp function copyfiles
 |--------------------------------------------------------------------------
 | Copy any needed files.
 | Do a 'gulp copyfiles' after bower updates
 |--------------------------------------------------------------------------
 */
gulp.task("copyfiles", function() {
	/*
	 |--------------------------------------------------------------------------
	 | Copy AdminLTE Asset Files
	 |--------------------------------------------------------------------------
	 */
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

	gulp.src("vendor/bower_dl/adminLTE/index2.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/example2.html"));

	gulp.src("resources/assets/adminlte/plugins/iCheck/square/blue.png")
		.pipe(gulp.dest("public/assets/css/admin/"));

	gulp.src("resources/assets/adminlte/plugins/iCheck/square/blue@2x.png")
		.pipe(gulp.dest("public/assets/css/admin/"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy Bootstrap and FontAwesome
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/bootstrap/**")
		.pipe(gulp.dest("resources/assets/bootstrap/"));

	gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
		.pipe(gulp.dest("public/assets/fonts"));

	gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
		.pipe(gulp.dest("public/assets/css/fonts"));

	gulp.src("vendor/bower_dl/fontawesome/**")
		.pipe(gulp.dest("resources/assets/fontawesome/"));

	gulp.src("vendor/bower_dl/fontawesome/fonts/**")
		.pipe(gulp.dest("public/assets/css/fonts"));

	gulp.src("vendor/bower_dl/ionicons/**")
		.pipe(gulp.dest("resources/assets/ionicons/"));

	gulp.src("vendor/bower_dl/ionicons/fonts/**")
		.pipe(gulp.dest("public/assets/css/fonts"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy jQuery and jQuery UI JS Assets
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
		.pipe(gulp.dest("resources/assets/js/"));

	gulp.src("vendor/bower_dl/jquery-ui/jquery-ui.js")
		.pipe(gulp.dest("resources/assets/js/"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy Datatables Assets
	 |--------------------------------------------------------------------------
	 */
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
 | Default gulp is to run this elixir laravel function - builds on gulp
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

		// COMPILE ADMIN AND BOOTSTRAP LESS - ADMIN CSS
		if (enable_compile_admin_css) {
			mix.less('admin.less', 'public/assets/css/admin/components/admin-core.css');
			mix.less('admin-skins.less', 'public/assets/css/admin/components/admin-skins.css');
			mix.less('admin-font-icons.less', 'public/assets/css/admin/components/admin-font-icons.css');
			mix.less('bootstrap/bootstrap.less', 'public/assets/css/vendor/bootstrap.css');

			// //COMBINE ADMIN DASHBOARD CSS FILES INTO SINGLE FILE - ADMIN CSS
		    mix.styles([
				'public/assets/css/vendor/bootstrap.css',												// BOOTSTRAP CORE INPUT
				'public/assets/css/admin/components/admin-core.css',									// ADMIN LTE CORE INPUT
				'public/assets/css/admin/components/admin-skins.css',									// ADMIN LTE SKINS INPUT
				'public/assets/css/admin/components/admin-font-icons.css',								// ADMIN LTE FONT ICONS INPUT
		        'resources/assets/adminlte/plugins/iCheck/flat/blue.css',								// ADMINLTE PLUGIN CSS - iCheck
		        'resources/assets/adminlte/plugins/morris/morris.css',									// ADMINLTE PLUGIN CSS - Morris chart
		        'resources/assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',				// ADMINLTE PLUGIN CSS - jvectormap
		        'resources/assets/adminlte/plugins/datepicker/datepicker3.css',							// ADMINLTE PLUGIN CSS - Date Picker
		        'resources/assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css',			// ADMINLTE PLUGIN CSS - Daterange picker
				'resources/assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css'	    // ADMINLTE PLUGIN CSS - Bootstrap wysihtml5 text editor
		    ],
		    'public/assets/css/admin/admin.css', './');													// SINGLE FILE OUTPUT
		}

		// COMBINE ADMIN SCRIPTS - ADMIN JS
		if (enable_compile_admin_js) {

			mix.scripts([
					'js/jquery.js',
					'js/jquery-ui.js',
					'bootstrap/dist/js/bootstrap.js',
					'adminlte/dist/js/app.js',
					'adminlte/dist/js/pages/dashboard.js',
					'adminlte/plugins/morris/morris.js',
					'adminlte/plugins/sparkline/jquery.sparkline.js',
					'adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.js',
					'adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
					'adminlte/plugins/knob/jquery.knob.js',
					'adminlte/plugins/daterangepicker/daterangepicker.js',
					'adminlte/plugins/datepicker/bootstrap-datepicker.js',
					'adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js',
					'adminlte/plugins/slimScroll/jquery.slimscroll.js',
					'adminlte/plugins/fastclick/fastclick.js',
			    ],
				'public/assets/js/admin/admin.js',
				'resources/assets'
			);
		}
	}

	/*
	 |--------------------------------------------------------------------------
     | ########               ##        #######   ######   #### ##    ##
     | ##                     ##       ##     ## ##    ##   ##  ###   ##
     | ##                     ##       ##     ## ##         ##  ####  ##
     | #######     #######    ##       ##     ## ##   ####  ##  ## ## ##
     |       ##               ##       ##     ## ##    ##   ##  ##  ####
     | ##    ##               ##       ##     ## ##    ##   ##  ##   ###
     |  ######                ########  #######   ######   #### ##    ##
	 |--------------------------------------------------------------------------
	 */
	// PROCESS APP ASSETS
	if (enable_compile_login) {

		// COMPILE LOGIN CSS/SCSS - LOGIN CSS
		if (enable_compile_login_css) {

			//COMBINE LOGIN CSS FILES INTO SINGLE FILE - LOGIN CSS
		    mix.styles([
				'public/assets/css/vendor/bootstrap.css',												// BOOTSTRAP CORE INPUT
				'public/assets/css/admin/components/admin-core.css',									// ADMIN LTE CORE INPUT
				'public/assets/css/admin/components/admin-skins.css',									// ADMIN LTE SKINS INPUT
				'resources/assets/adminlte/plugins/iCheck/flat/blue.css',								// ADMINLTE PLUGIN CSS - iCheck
				'public/assets/css/admin/components/admin-font-icons.css',								// ADMIN LTE FONT ICONS INPUT
				'resources/assets/adminlte/plugins/iCheck/square/blue.css',
		    ],
		    'public/assets/css/admin/login.css', './');													// SINGLE FILE OUTPUT
		}

		//COMBINE LOGIN SCRIPTS - LOGIN JS
		if (enable_compile_login_js) {
		    mix.scripts([
					'js/jquery.js',
					'bootstrap/dist/js/bootstrap.js',
					'resources/assets/adminlte/plugins/iCheck/icheck.min.js',
			    ],
			    'public/assets/js/login.js',
			    'resources/assets'
		   	);
		}

	}

	/*
	 |--------------------------------------------------------------------------
     |  #######                   ###    ########  ########
     | ##     ##                 ## ##   ##     ## ##     ##
     | ##                       ##   ##  ##     ## ##     ##
     | ########     #######    ##     ## ########  ########
     | ##     ##               ######### ##        ##
     | ##     ##               ##     ## ##        ##
     |  #######                ##     ## ##        ##
	 |--------------------------------------------------------------------------
	 */
	// PROCESS APP ASSETS
	if (enable_compile_app) {

		// COMIPILE APP SASS/SCSS - APP CSS
		if (enable_compile_app_css) {
			mix.sass('app.scss', 'public/assets/css/app.css');
		}

		//COMBINE APP SCRIPTS - APP JS
		if (enable_compile_app_js) {
		    mix.scripts([
					'js/jquery.js',
					'js/bootstrap.js',
					'js/app.js',
			    ],
			    'public/assets/js/app.js',
			    'resources/assets'
		   	);
		}

	}

	/*
	 |--------------------------------------------------------------------------
     | ########               ######## ########  ######  ######## #### ##    ##  ######
     | ##    ##                  ##    ##       ##    ##    ##     ##  ###   ## ##    ##
     |     ##                    ##    ##       ##          ##     ##  ####  ## ##
     |    ##       #######       ##    ######    ######     ##     ##  ## ## ## ##   ####
     |   ##                      ##    ##             ##    ##     ##  ##  #### ##    ##
     |   ##                      ##    ##       ##    ##    ##     ##  ##   ### ##    ##
     |   ##                      ##    ########  ######     ##    #### ##    ##  ######
	 |--------------------------------------------------------------------------
	 */
	// START phpUnit FOR UNIT TESTING
	if (enable_unit_testing) {
		mix.phpUnit();
	}

});

