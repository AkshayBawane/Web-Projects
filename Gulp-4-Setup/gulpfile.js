(() => {

	'use strict';
	/**************** Gulp.js 4 configuration ****************/

	const
		// development or production
		devBuild = ((process.env.NODE_ENV || 'development').trim().toLowerCase() === 'development'),

		// directory locations
		dir = {
			src: 'src/',
			build: 'build/'
		},

		// modules
		gulp = require('gulp'),
		del = require('del'),
		noop = require('gulp-noop'),
		newer = require('gulp-newer'),
		size = require('gulp-size'),
		imagemin = require('gulp-imagemin'),
		sass = require('gulp-sass'),
		postcss = require('gulp-postcss'),
		cssnano = require('cssnano'),
		uglify = require('gulp-uglify'),
		rename = require('gulp-rename'),
		browsersync = devBuild ? require('browser-sync').create() : null;
	console.log('Gulp', devBuild ? 'development' : 'production', 'build');


	/**************** clean task ****************/

	function clean() {
		return del([dir.build]);
	}
	exports.clean = clean;
	exports.wipe = clean;
	/**************** images task ****************/

	const imgConfig = {
		src: dir.src + 'images/**/*',
		build: dir.build + 'images/',

		minOpts: {
			optimizationLevel: 5
		}
	};

	function images() {
		return gulp.src(imgConfig.src)
			.pipe(newer(imgConfig.build))
			.pipe(imagemin(imgConfig.minOpts))
			.pipe(size({
				showFiles: true
			}))
			.pipe(gulp.dest(imgConfig.build));

	}
	exports.images = images;
	/**************** CSS task ****************/

	const cssConfig = {
		src: dir.src + 'scss/main.scss',
		watch: dir.src + 'scss/**/*',
		build: dir.build + 'css/',
		sassOpts: {
			sourceMap: devBuild,
			outputStyle: 'nested',
			imagePath: '/images/',
			precision: 3,
			errLogToConsole: true
		},

		postCSS: [
			require('postcss-assets')({
				loadPaths: ['images/'],
				basePath: dir.build
			}),
			cssnano()
		]
	};

	// remove unused selectors and minify production CSS
	if (!devBuild) {
		cssConfig.postCSS.push(
			require('usedcss')({
				html: ['index.html']
			}),
			require('cssnano')
		);
	}

	function css() {
		return gulp.src(cssConfig.src)
			.pipe(sass(cssConfig.sassOpts).on('error', sass.logError))
			.pipe(postcss(cssConfig.postCSS,cssnano()))
			.pipe(size({
				showFiles: true
			}))
			.pipe(rename({
				basename: 'main',
				suffix: '.min'
			}))
			.pipe(gulp.dest(cssConfig.build))
			.pipe(browsersync ? browsersync.reload({
				stream: true
			}) : noop());
	}

	/**************** JS task ****************/
	const jsConfig = {
		src: dir.src + 'js/main.js',
		watch: dir.src + 'js/**/*',
		build: dir.build + 'js/',
	};

	function js() {
		return gulp.src(jsConfig.src)
			.pipe(uglify())
			.pipe(rename({
				basename: 'main',
				suffix: '.min'
			}))
			.pipe(gulp.dest(jsConfig.build))
			.pipe(browsersync ? browsersync.reload({
				stream: true
			}) : noop());

	}
	exports.css = gulp.series(images, css, js);
	/**************** server task (now private) ****************/

	const syncConfig = {
		server: {
			baseDir: './',
			index: 'index.html'
		},
		port: 8000
	};

	// browser-sync
	function server(done) {
		if (browsersync) browsersync.init(syncConfig);
		done();
	}
	/**************** watch task ****************/

	function watch(done) {

		// image changes
		gulp.watch(imgConfig.src, images);

		// CSS changes
		gulp.watch(cssConfig.watch, css);

		// JS changes
		gulp.watch(jsConfig.watch, js);
		done();
	}

	/**************** default task ****************/
	exports.default = gulp.series(exports.css, watch, server);
})();