// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync').create();
// var browserSync = require('browser-sync');

gulp.task('sass', function() {
    gulp.src('assets/scss/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('assets/css'))    
});

gulp.task('default', ['sass'], function() {
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('*.php').on('change', browserSync.reload);
})





