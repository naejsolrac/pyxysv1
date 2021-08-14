const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postCss = require('gulp-postcss');
const cssNano = require('cssnano');
const babel = require('gulp-babel');
// const terser = require('gulp-terser');
// const browserSync = require('');

function scssTask(){
    return src('src/scss/bundle.scss', {sourcemaps: true})
    .pipe( sass() )
    .pipe( postCss([ cssNano() ]) )
    .pipe( dest('dist', { sourcemaps: '.' }) );
}

function jsTask(){
    return src('src/js/bundle.js', { sourcemaps: true })
            .pipe( babel( {presets: ['@babel/env']} ) )
            .pipe( dest('dist', { sourcemaps: true }) );
}

function watchTask(){
    watch(['src/scss/**/*.scss', 'src/js/**/*.js'], series(scssTask, jsTask));
}

exports.default = series(
    scssTask,
    jsTask,
    watchTask
);