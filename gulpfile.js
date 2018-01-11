var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');


// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
  return gulp.src("scss/styles.scss")
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest("./styles"))
    .pipe(browserSync.stream());
});

gulp.task('watch',function() {
    gulp.watch('scss/styles.scss',['sass']);
});
gulp.task('default', ['sass']);