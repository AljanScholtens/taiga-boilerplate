var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var cssnano = require('gulp-cssnano');
var atImport = require('postcss-import');
var lost = require('lost');
var cssnext = require('postcss-cssnext');
var postcssExtend = require('postcss-simple-extend');

gulp.task('default',function() {
  gulp.watch('assets/stylesheets/*.css',['css']);
});

gulp.task("css", function() {
  var processors = [
    atImport,
    postcssExtend,
    cssnext({
      browers: ['last 2 version'],
      compress: true
    }),
    lost()
  ];
  return gulp.src('assets/stylesheets/styles.css')
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cssnano())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist/stylesheets'));
});
