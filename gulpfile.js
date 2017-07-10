/**
 * Created by Nihrom on 20.06.2017.
 */
const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const spritesmith = require('gulp.spritesmith');
const rimraf = require('rimraf');
const autoprefixer = require('gulp-autoprefixer');
const rename = require("gulp-rename");

/* -------- Server  -------- */
gulp.task('server', function() {
    browserSync.init({
        open: 'external',
        host: 'specmir.ru',
        proxy: 'specmir.ru',
        port: 8080 // for work mamp
    });

    gulp.watch(['/assets/**/*', '*.php']).on('change', browserSync.reload);
});

/*---------------------- SASS Compile ------------------------*/
gulp.task('styleScss:compile', function () {
    return gulp.src('assets/scss/style.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) 
        .pipe(autoprefixer())
        //.pipe(rename("style.css"))
        .pipe(gulp.dest('../specmir/'));
});

gulp.task('bootstrapScss:compile', function () {
    return gulp.src('assets/vendors/bootstrap/scss/bootstrap.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(rename("bootstrap.min.css"))
        .pipe(gulp.dest('assets/vendors/bootstrap/dist/css'));
});

/*---------------------- Sprites ------------------------*/

gulp.task('sprite', function (cb) {

    const spriteData = gulp.src('source/images/icons/**/*.png').pipe(spritesmith({
        imgName: 'sprite.png',
        imgPath:'../images/sprite.png',
        cssName: 'sprite.scss'
    }));

    spriteData.img.pipe(gulp.dest('build/images/'));
    spriteData.css.pipe(gulp.dest('source/styles/global/'));

    cb();
});

/*---------------------- Delete ------------------------*/
gulp.task('clean', function del(cb) {
    return rimraf('build', cb);
});



/* ------------ Watchers ------------- */
gulp.task('watch', function() {
    gulp.watch(['assets/scss/**/*.scss'], gulp.series('styleScss:compile'));
    gulp.watch(['assets/vendors/bootstrap/scss/**/*.scss'], gulp.series('bootstrapScss:compile'));
});

gulp.task('default', gulp.series(
    //'clean',
    gulp.parallel('styleScss:compile', 'bootstrapScss:compile'),
    gulp.parallel('watch', 'server')
    )
);