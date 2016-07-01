var browserslist = require('browserslist');
var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var cssnano = require('gulp-cssnano');
var atImport = require('postcss-import');
var lost = require('lost');
var cssnext = require('postcss-cssnext');

// browsers for which autoprefix will add prefixes
var browsers = 'last 2 versions';

gulp.task('default',function() {
  gulp.watch('assets/stylesheets/*.css',['css']);
});

// Compile CSS
gulp.task("css", function() {
  var processors = [
    atImport,
    cssnext(),
    lost()
  ];
  return gulp.src(['assets/stylesheets/styles.css', 'assets/stylesheets/styleguide.css'])
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cssnano())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist/stylesheets'));
});

// display browsers
gulp.task('browserslist', function(){
  console.log(browserslist(browsers));
});
