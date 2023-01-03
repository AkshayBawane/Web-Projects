'use strict';

const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const $ = gulpLoadPlugins();
const browserSync = require('browser-sync');
const cleanCSS = require('gulp-clean-css');
const purgecss = require('gulp-purgecss');
const del = require('del');
const reload = browserSync.reload;

// const uglify = require('gulp-uglify');
// const order = require("gulp-order");
// const concat = require("gulp-concat");
// const concat = require('gulp-concat');
// const sass = require('gulp-sass');
// const gzip = require('gulp-gzip');
// const autoprefixer = require('autoprefixer');
// const rename = require('gulp-rename');
// const plumber = require('gulp-plumber');

// To compile Sass files
gulp.task('sass-styles', () => {
	gulp.src(['assets/sass/**/*.scss'])
		.pipe($.plumber())
		.pipe($.sass.sync({ outputStyle: 'expanded', precision: 10, includePaths: ['.'] }).on('error', $.sass.logError))
		.pipe($.autoprefixer({ browsers: ['> 1%', 'last 2 versions', 'Firefox ESR'] }))
		.pipe(purgecss({
			content: ["*.html"]
		}))
		.pipe(cleanCSS())
		.pipe($.concat('all-scss-files.css'))
		// .pipe(gzip())
		.pipe(gulp.dest('build/css'))
		// .on('end', reload);
});

// To compile CSS files
gulp.task('css-styles', () => {
	gulp.src(['assets/css/**/*.css', '!assets/css/**/*.min.css'])
		.pipe($.plumber())
		.pipe($.order([
			"css-essentials/**/*.css",
			"css-plugins/**/*.css"
		]))
		// .pipe(purgecss({
		// 	content: ["*.html"]
		// }))
		.pipe(cleanCSS())
		.pipe($.concat('all-css-plugins.css'))
		// .pipe(gzip())
		.pipe(gulp.dest('build/css'))
		// .on('end', reload);
});


// To minify javascript. Don't change the order here.
gulp.task('javascript', () => {
	gulp.src(['assets/js/**/*.js', '!assets/js/**/*.min.js'])
	.pipe($.plumber())
	.pipe($.order([
		"js-essentials/**/*.js",
		"js-plugins/**/*.js"
	]))
	.pipe($.uglify({mangle: false}))
	.pipe($.concat('js-plugins.js', { newLine: '\n;' }))
	// .pipe(gzip())
	.pipe(gulp.dest('build/js'))
	// .on('end', reload);
});

gulp.task('clean', () => {
	del.sync(['build/**']);
});

// Concat All Css files to create one file.
// gulp.task('concat-styles', () => {
// 	gulp.src(['assets/css/css-plugins/**/*.css', 'assets/css/all-scss-files.css'])
// 		.pipe($.plumber())
// 		.pipe(cleanCSS())
// 		.pipe($.concat('all-fileszzzzzzzz.css'))
// 		// .pipe(gzip())
// 		.pipe(gulp.dest('build/css'))
// 		// .on('end', reload);
// });

// To minify HTML files.
// gulp.task('html-mini', () => {
// 	gulp.src('*.html')
// 		.pipe($.htmlmin({
// 			collapseWhitespace: true
// 		}))
// 		.pipe(gulp.dest('build/html'))
// });

// Task for production:
// gulp.task('serve', ['sass-styles', 'css-styles', 'javascript', 'html-mini'], () => {
gulp.task('serve', ['sass-styles', 'css-styles', 'javascript', 'clean'], () => {
	browserSync({
		notify: false,
		port: 9000,
		server: {
			baseDir: ['./']
		}
	});

	gulp.watch('*.html').on('change', reload);
	gulp.watch('assets/sass/**/*.scss', ['sass-styles']).on('change', reload);

	// gulp.watch('assets/sass/**/*.scss', ['sass-styles']);
	// gulp.watch('assets/js/**/*.js', ['javascript']);
});

gulp.task('default', () => {
	gulp.start('serve');
});