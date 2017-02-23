/**
 * @package sketch
 * @author Willem Dumee
 * @version 0.2
 */

var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var connect = require('gulp-connect-php');
var sass = require('gulp-sass');
var minify = require('gulp-minify');
var flatten = require('gulp-flatten');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var csslint = require('gulp-csslint');
var jshint = require('gulp-jshint');
var url = require('url');

var Config = require('./sketch.config.json');

gulp.task('php', function() {
    var localUrl = url.parse(Config.localUrl);

    connect.server({
        hostname: localUrl.hostname,
        port: localUrl.port
    }, () => {
        browserSync.init({
            proxy: Config.localUrl,
            port: 3001
        });
   });
})

gulp.task('watch', function () {
    gulp.watch('build/scss/**/*.scss', ['sass']);
    gulp.watch('build/js/**/*.js', ['scripts']);
    gulp.watch('templates/**/*.rain').on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function () {
    return gulp.src('build/scss/**/*.scss')
        .pipe(flatten())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets'))
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(rename({
            suffix: '-min'
        }))
        .pipe(gulp.dest('assets'))
        .pipe(browserSync.stream());
});

gulp.task('css', function () {
    gulp.src(['assets/*.css', '!assets/bootstrap-min.css'])
        .pipe(csslint())
        .pipe(csslint.reporter());
});

gulp.task('scripts', function () {
    gulp.src('build/js/**/*.js')
        .pipe(flatten())
        .pipe(minify())
        .pipe(gulp.dest('assets'))
        .pipe(browserSync.stream());
});

gulp.task('jshint', function () {
    gulp.src('./assets/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

gulp.task('default', ['php', 'watch']);