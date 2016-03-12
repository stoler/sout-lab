var gulp = require('gulp'),
    uglify = require ('gulp-uglify'),
    csso = require ('gulp-csso'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    compass = require('gulp-compass'),
    spritesmith = require("gulp-spritesmith"),
    gulpif = require("gulp-if");
    //browserSync = require('browser-sync').create();

var src = './laravel/resources/assets/dev/',
    dest = './laravel/resources/assets/build/',
    root = './laravel/resources/assets/';

// сборка спрайтов
gulp.task('sprite', function () {
    return  gulp.src(src + 'img/icons/*.png')
        .pipe(spritesmith({
            imgName: 'sprite.png',
            styleName: '_sprite.scss',
            imgPath: '../../img/sprite.png'
        }))
        .pipe(gulpif('*.png', gulp.dest(root + 'img/')))
        .pipe(gulpif('*.scss', gulp.dest(src + 'sass/')));
});

//==========================================
// build vendor js
gulp.task('jsVendor', function() {
    return gulp.src([
            src + 'js/vendor/jquery/jquery-1.12.1.min.js',
            src + 'js/vendor/jquery-file-upload/jquery.ui.widget.js',
            src + 'js/vendor/jquery-file-upload/tmpl.min.js',
            src + 'js/vendor/jquery-file-upload/load-image.all.min.js',
            src + 'js/vendor/jquery-file-upload/jquery.iframe-transport.js',
            src + 'js/vendor/jquery-file-upload/jquery.fileupload.js',
            src + 'js/vendor/jquery-file-upload/jquery.fileupload-process.js',
            src + 'js/vendor/jquery-file-upload/jquery.fileupload-image.js',
            src + 'js/vendor/jquery-file-upload/jquery.fileupload-validate.js',
            src + 'js/vendor/jquery-file-upload/jquery.fileupload-ui.js'
        ])
        .pipe(uglify())
        .pipe(concat('vendor.min.js'))
        .pipe(gulp.dest(dest + 'js'));
});

// build custom js
gulp.task('jsCustom', function() {
    return gulp.src([
            src + 'js/jquery-file-upload.js',
            src + 'js/base.js'
        ])
        .pipe(uglify())
        .pipe(concat('scripts.min.js'))
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
gulp.task('watch', ['sass', 'js'], function() {
    /*
    browserSync.init({
        server: src
    });
    */
    gulp.watch(src + 'sass/**/*.scss', ['sass']);
    gulp.watch(src + 'js/**/*.js', ['js']);
    //gulp.watch(src + "**/*").on('change', browserSync.reload);
});

/*======================= Admin =====================================*/
// build custom css for admin
gulp.task('sassA', function () {
    gulp.src(src + 'sass/admin/admin.scss')
        .pipe(compass({
            config_file: root + 'config.rb',
            css: src + 'css',
            sass: src + 'sass/admin'
        }))
        .pipe(sass())
        .pipe(concat('admin.css'))
        .pipe(gulp.dest(src + 'css'))
        .pipe(rename('admin.min.css'))
        .pipe(csso())
        .pipe(gulp.dest(dest + 'css'));
});

// build vendor js for admin
gulp.task('jsVendorA', function() {
    return gulp.src([
        src + 'js/vendor/jquery/jquery-1.12.1.min.js',
        src + 'js/vendor/jquery-file-upload/jquery.ui.widget.js',
        src + 'js/vendor/jquery-file-upload/tmpl.min.js',
        src + 'js/vendor/jquery-file-upload/load-image.all.min.js',
        src + 'js/vendor/jquery-file-upload/jquery.iframe-transport.js',
        src + 'js/vendor/jquery-file-upload/jquery.fileupload.js',
        src + 'js/vendor/jquery-file-upload/jquery.fileupload-process.js',
        src + 'js/vendor/jquery-file-upload/jquery.fileupload-image.js',
        src + 'js/vendor/jquery-file-upload/jquery.fileupload-validate.js',
        src + 'js/vendor/jquery-file-upload/jquery.fileupload-ui.js',
        src + 'js/vendor/tinymce/tinymce.js'
    ])
        .pipe(uglify())
        .pipe(concat('vendor-admin.min.js'))
        .pipe(gulp.dest(dest + 'js'));
});

// build custom js
gulp.task('jsCustomA', function() {
    return gulp.src([
        src + 'js/jquery-file-upload.js',
        src + 'js/base.js'
    ])
        .pipe(uglify())
        .pipe(concat('admin.min.js'))
        .pipe(gulp.dest(dest + 'js'));
});

// сборка спрайтов для админки
gulp.task('spriteA', function () {
    return  gulp.src(src + 'img/admin/icons/*.png')
        .pipe(spritesmith({
            imgName: 'admin-sprite.png',
            styleName: '_sprite.scss',
            imgPath: '../../img/admin/admin-sprite.png'
        }))
        .pipe(gulpif('*.png', gulp.dest(root + 'img/admin/')))
        .pipe(gulpif('*.scss', gulp.dest(src + 'sass/admin/')));
});

//build js
gulp.task('jsA', ['jsVendorA', 'jsCustomA']);

gulp.task('watchA', ['sassA', 'jsA'], function() {
    /*
     browserSync.init({
     server: src
     });
     */
    gulp.watch(src + 'sass/admin/**/*.scss', ['sassA']);
    gulp.watch(src + 'js/**/*.js', ['jsA']);
    //gulp.watch(src + "**/*").on('change', browserSync.reload);
});