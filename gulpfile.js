var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var lost = require('lost');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  gulp.src('assets/stylesheets/styles.scss')

    .pipe(sass().on('error', sass.logError))

    .pipe(sass({outputStyle: 'compressed'}))

    .pipe(postcss([
      lost()
    ]))

    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false,
    }))

    .pipe(gulp.dest('dist/stylesheets'));
});

gulp.task('default',function() {
    gulp.watch('assets/stylesheets/*.scss',['sass']);
});
