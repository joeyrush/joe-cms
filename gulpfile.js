// Include gulp
var gulp = require('gulp');
 // Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var importCss = require('gulp-import-css');

 // Concatenate & Minify JS Files
gulp.task('scripts', function() {
    return gulp.src([
    		'resources/js/vendor/bootstrap.min.js',
    		'resources/js/vendor/icheck.min.js',
    		'resources/js/vendor/jquery.fancybox.pack.js',
    		'resources/js/vendor/jquery.fancybox-media.js',
    		'resources/js/vendor/particles.min.js',
    		'resources/js/vendor/jquery.matchHeight.js',
    		'resources/js/vendor/prism.js',
    		'resources/js/load.js',
    		'resources/js/site.js'
    	])
	    .pipe(concat('site.js'))
      	.pipe(rename({suffix: '.min'}))
      	.pipe(uglify())
      	.pipe(gulp.dest('webroot/js'));
});
 // Default Task
gulp.task('default', ['scripts', 'sass', 'watch']);

var sass = require('gulp-ruby-sass');
gulp.task('sass', function() {
	return sass('resources/sass/site.scss', {style: 'compressed'})
		.pipe(rename({suffix: '.min'}))
		.pipe(importCss())
		.pipe(gulp.dest('webroot/css'));
});

gulp.task('watch', function() {
   // Watch .js files
  gulp.watch('resources/js/*.js', ['scripts']);
   // Watch .scss files
  gulp.watch('resources/sass/*.scss', ['sass']);
   // Watch image files
  // gulp.watch('src/images/**/*', ['images']);
 });