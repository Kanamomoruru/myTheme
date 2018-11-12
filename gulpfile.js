const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');

gulp.task('convertToCss', function () {
    gulp.src('./src/scss/style.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});

gulp.task('default', function () {
    gulp.watch('./src/scss/**/*.scss', ['convertToCss']);
});
