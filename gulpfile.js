var gulp = require('gulp'),
    uglify = require ('gulp-uglify'),
    csso = require ('gulp-csso'),
    uncss = require ('gulp-uncss'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    compass = require('gulp-compass'),
    jade = require('jade'),
    gulpJade = require('gulp-jade'),
    browserSync = require('browser-sync').create();

var src = './app/',
    dest = './build/';

// сборка спрайтов


// jade
gulp.task('jade', function () {
    return gulp.src(src + 'jade/**/*.jade')
        .pipe(gulpJade({
            jade: jade,
            pretty: true
        }))
        .pipe(gulp.dest(src));
});




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
    gulp.src(src + 'scss/style.scss')
        .pipe(compass({
            config_file: 'config.rb',
            css: src + 'css',
            sass: src + 'scss'
        }))
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(gulp.dest(src + 'css'))
        .pipe(rename('style.min.css'))
        .pipe(csso())
        .pipe(gulp.dest(dest + 'css'));
});

// Static Server + watching scss/html files
gulp.task('watch', ['sass', 'jade'], function() {
    browserSync.init({
        server: src
    });

    gulp.watch(src + 'scss/**/*.scss', ['sass']);
    //gulp.watch(src + 'js/**/*.js', ['js']);
    gulp.watch(src + '**/*.jade', ['jade']);
    gulp.watch(src + "**/*").on('change', browserSync.reload);

});