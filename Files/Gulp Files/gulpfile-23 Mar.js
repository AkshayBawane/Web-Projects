'use strict';

const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const $ = gulpLoadPlugins();
const browserSync = require('browser-sync');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const reload = browserSync.reload;

// const concat = require('gulp-concat');
// const sass = require('gulp-sass');
// const gzip = require('gulp-gzip');
// const autoprefixer = require('autoprefixer');
// const rename = require('gulp-rename');
const plumber = require('gulp-plumber');

// To compile Sass files
gulp.task('sass-styles', () => {
	gulp.src(['assets/sass/**/*.scss'])
		.pipe(plumber())
		.pipe($.sass.sync({ outputStyle: 'expanded', precision: 10, includePaths: ['.'] }).on('error', $.sass.logError))
		.pipe($.autoprefixer({ browsers: ['> 1%', 'last 2 versions', 'Firefox ESR'] }))
		.pipe(cleanCSS())
		.pipe($.concat('all-scss-files.css'))
		// .pipe(gzip())
		.pipe(gulp.dest('build/css'))
		// .on('end', reload);
});

// To compile CSS files
gulp.task('css-styles', () => {
	gulp.src(['assets/css/css-plugins/**/*.css', '!assets/css/css-plugins/**/*.min.css'])
		.pipe(plumber())
		.pipe(cleanCSS())
		.pipe($.concat('all-css-plugins.css'))
		// .pipe(gzip())
		.pipe(gulp.dest('build/css'))
		// .on('end', reload);
});

// To minify javascript. Don't change the order here.
gulp.task('javascript', () => {
	gulp.src(['assets/js/**/*.js', '!assets/js/**/*.min.js'])
		// return gulp.src(['./js/main.js', './js/bootstrap/bootstrap.js', './js/bootstrap/popper.min.js', '.js/jQuery/jquery-3.2.1.min.js']) //select selected files from folder
		.pipe(plumber())
		.pipe(uglify())
		.pipe($.concat('js-plugins.js', { newLine: '\n;' }))
		// .pipe(gulp.dest('build/js'))
		// .pipe(gzip())
		.pipe(gulp.dest('build/js'))
		// .on('end', reload);
});

// To minify HTML files
gulp.task('html-mini', () => {
	gulp.src('*.html')
		.pipe($.htmlmin({
			collapseWhitespace: true
		}))
		.pipe(gulp.dest('build/html'))
});

// Task to serve everything with browserSync (except images)
gulp.task('serve', ['sass-styles', 'css-styles', 'javascript', 'html-mini'], () => {
	browserSync({
		notify: false,
		port: 9000,
		server: {
			baseDir: ['./']
		}
	});

	// gulp.watch([
	// 	'*.html',
	// 	'assets/sass/**/*.scss',
	// ]).on('change', reload);

	gulp.watch('assets/sass/**/*.scss', ['sass-styles']).on('change', reload);

	// gulp.watch('assets/sass/**/*.scss', ['sass-styles']);
	// gulp.watch('assets/js/**/*.js', ['javascript']);
});

gulp.task('default', () => {
	gulp.start('serve');
});