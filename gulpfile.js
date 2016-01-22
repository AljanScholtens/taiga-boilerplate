var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
// var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');
var cssnano = require('gulp-cssnano');
var atImport = require('postcss-import');
var lost = require('lost');
var cssnext = require('postcss-cssnext');
var postcssExtend = require('postcss-simple-extend');

gulp.task('default',function() {
  gulp.watch('assets/stylesheets/*.css',['css', 'patterns']);
});

gulp.task("css", function() {
  var processors = [
    atImport,
    postcssExtend,
    cssnext,
    // cssnext([
    //   browserslist('last 1 version')
    // ]),
    lost(),

    //autoprefixer({ browsers: ['ie >= 11'] })
  ];
  return gulp.src('assets/stylesheets/styles.css')
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cssnano())
    .pipe(sourcemaps.write('.'))

    // IE7/8 CSS support is disbabled on default
    // .pipe(autoprefixer({
    //   browsers: ['last 2 versions'],
    //   cascade: false,
    // }))

    .pipe(gulp.dest('dist/stylesheets'));
});

gulp.task("patterns", function() {
  var processors = [
    atImport,
    postcssExtend,
    cssnext,
    // cssnext([
    //   browserslist('last 1 version')
    // ]),
    lost(),
    //autoprefixer({ browsers: ['ie >= 11'] })
  ];
  return gulp.src('assets/stylesheets/pattern-library.css')
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cssnano())
    .pipe(sourcemaps.write('.'))

    // IE7/8 CSS support is disbabled on default
    // .pipe(autoprefixer({
    //   browsers: ['last 2 versions'],
    //   cascade: false,
    // }))

    .pipe(gulp.dest('dist/stylesheets'));
});
