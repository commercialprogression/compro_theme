var browserSync = require('browser-sync').create();
var cssnano = require('cssnano');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var gulp = require('gulp');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

var folders = ['./css/src/vendor/*.css', './css/src/elements/*.css', './css/src/config/*.css', './css/src/components/*.css']

gulp.task('css', function() {
  var plugins = [
    cssnext({
      warnForDuplicates: false
    }),
    cssnano({
      zindex: false
    })
  ];
  return gulp.src(folders)

    .pipe(sourcemaps.init())
    .pipe(postcss(plugins))
    .pipe(concat('styles.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css/dest'));
});

gulp.task('css-watch', ['css'], function(done) {
  browserSync.reload();
  done();
});

gulp.task('default', ['css'], function() {
  browserSync.init({
    proxy: {
      target: 'http://localhost:8000'
    },
    browser: []
  });

  gulp.watch('./css/src/**/*.css', ['css-watch']);
});
