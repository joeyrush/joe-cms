// Include gulp
var gulp = require('gulp');
 // Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
 // Concatenate & Minify JS Files
gulp.task('scripts', function() {
    return gulp.src('webroot/js/*.js')
      .pipe(concat('site.js'))
      	.pipe(rename({suffix: '.min'}))
      	.pipe(uglify())
      	.pipe(gulp.dest('webroot/js/minified'));
});
 // Default Task
gulp.task('default', ['scripts', 'sass', 'watch']);

var sass = require('gulp-ruby-sass');
gulp.task('sass', function() {
	return sass('webroot/css/scss/site.scss', {style: 'compressed'})
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('webroot/css/minified'));
});

gulp.task('watch', function() {
   // Watch .js files
  gulp.watch('webroot/js/*.js', ['scripts']);
   // Watch .scss files
  gulp.watch('webroot/css/scss/*.scss', ['sass']);
   // Watch image files
  // gulp.watch('src/images/**/*', ['images']);
 });