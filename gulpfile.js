// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync').create();

// var browserSync = require('browser-sync');

gulp.task('sass', function() { 
gulp.src('*.scss') 
.pipe(sass()) 
.pipe(autoprefixer()) 
.pipe(browserSync.stream()) 
.pipe(gulp.dest(function(f) { 
return f.base; 
})) 

browserSync.init({ 
proxy: "localhost/as-studio", 
notify: false 
}); 
});

gulp.task('default', ['sass'], function() {
    gulp.watch('assets/scss/**/*.scss', ['sass']).on('change', browserSync.reload);
    gulp.watch('*.php').on('change', browserSync.reload);
})




