/**
 * Created by CTRL on 06-02-16.
 */

var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

gulp.task('serve', function() {
    browserSync.init({
        proxy: "localhost:80/sketch",
          port: 3001
    });

    gulp.watch("assets/scss/*.scss", ['sass']);
    gulp.watch("templates/**/*.rain").on('change', browserSync.reload);
});


// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("assets/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("assets"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);





