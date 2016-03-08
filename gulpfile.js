var gulp = require('gulp'),
    uglify = require ('gulp-uglify'),
    csso = require ('gulp-csso'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    compass = require('gulp-compass');
    //browserSync = require('browser-sync').create();

var src = './laravel/resources/assets/dev/',
    dest = './laravel/resources/assets/build/',
    root = './laravel/resources/assets/';
// сборка спрайтов



//==========================================
// build vendor js
gulp.task('jsVendor', function() {
    return gulp.src(['путь', 'путь'])
        .pipe(uglify())
        .pipe(gulp.dest(dest + 'js'));
});

// build custom js
gulp.task('jsCustom', function() {
    return gulp.src(['путь', 'путь'])
        .pipe(uglify())
        .pipe(gulp.dest(dest + 'js'));
});

//build js
gulp.task('js', ['jsVendor', 'jsCustom']);
//==========================================


// build custom css
gulp.task('sass', function () {
    gulp.src(src + 'sass/style.scss')
        .pipe(compass({
            config_file: root + 'config.rb',
            css: src + 'css',
            sass: src + 'sass'
        }))
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(gulp.dest(src + 'css'))
        .pipe(rename('style.min.css'))
        .pipe(csso())
        .pipe(gulp.dest(dest + 'css'));
});

// Static Server + watching scss/html files
gulp.task('watch', ['sass'], function() {
    /*
    browserSync.init({
        server: src
    });
    */
    gulp.watch(src + 'sass/**/*.scss', ['sass']);
    //gulp.watch(src + 'js/**/*.js', ['js']);
    //gulp.watch(src + "**/*").on('change', browserSync.reload);

});