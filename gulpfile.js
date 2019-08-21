const {
    src,
    dest,
    parallel,
    series,
    watch
} = require('gulp');
const rename = require('gulp-rename');
const pug = require('gulp-pug');


function html() {
    return src('./inc/pug/*.pug')
        .pipe(pug({
            pretty: true
        }))
        .pipe(rename({
            extname: '.php'
        }))
        .pipe(dest('./inc/views/'));
}

function watchTask() {
    watch('./inc/pug/*.pug', html);
}

exports.default = series(html, watchTask);