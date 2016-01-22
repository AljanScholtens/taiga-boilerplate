var gulp = require('gulp');
//var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var lost = require('lost');
var cssnext = require('gulp-cssnext');

// gulp.task('css', function () {
//   gulp.src('assets/stylesheets/styles.scss')
//
//     .pipe(sass().on('error', sass.logError))
//
//     .pipe(sass({outputStyle: 'compressed'}))
//
//     .pipe(postcss([
//       lost()
//     ]))
//
//     .pipe(autoprefixer({
//       browsers: ['last 2 versions'],
//       cascade: false,
//     }))
//
//     .pipe(gulp.dest('dist/stylesheets'));
// });

gulp.task("css", function() {
  var processors = [
    cssnext,
    lost()
  ];
  return gulp.src('assets/stylesheets/styles.css')
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist/stylesheets'));
});

gulp.task('default',function() {
    gulp.watch('assets/stylesheets/*.css',['css']);
});
