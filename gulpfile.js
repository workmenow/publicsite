var gulp = require('gulp');
var less = require('gulp-less');
var sourcemaps = require('gulp-sourcemaps');
var path = require('path');

gulp.task('watch', function () {
	gulp.watch('less/app/*.less', ['compile']);
	gulp.watch('less/bootstrap/*.less', ['compile']);
	gulp.watch('less/bootstrap/mixins/*.less', ['compile']);
});

gulp.task('compile', function () {
  return gulp.src('less/app/app.less')
	  .pipe(sourcemaps.init())
	  .pipe(less())
	  .pipe(sourcemaps.write('.'))
	  .pipe(gulp.dest('css'));
});
