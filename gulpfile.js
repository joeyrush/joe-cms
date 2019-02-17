// Include gulp
var gulp = require('gulp');
 // Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

 // Concatenate & Minify JS Files
gulp.task('scripts', function() {
    return gulp.src([
        'node_modules/chart.js/dist/chart.min.js',
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

var sass = require('gulp-sass');
sass.compiler = require('node-sass');

gulp.task('sass', function() {
  var tailwindcss = require('tailwindcss');
  var postcss = require('gulp-postcss');

  // The CSS-nano postcss plugin must come last in the change of modifications
  // because otherwise, other postcss plugins may un-minify the code
  return gulp.src('resources/sass/site.scss')
    .pipe(sass())
    .pipe(rename({suffix: '.min'}))
    .pipe(postcss([
      tailwindcss('./tailwind.js'),
      require('cssnano')()
    ]))
    .pipe(gulp.dest('webroot/css'))
});

gulp.task('watch', function() {
   // Watch .js files
  gulp.watch('resources/js/*.js', ['scripts']);
   // Watch .scss files
  gulp.watch(['resources/sass/*.scss', 'tailwind.js'], ['sass']);

   // Watch image files
  // gulp.watch('src/images/**/*', ['images']);
 });