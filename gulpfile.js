const { src, dest, watch } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");

function scss() {
    return src("assets/src/sass/init.scss")
        .pipe(concat("styles.min.scss"))
        .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
        .pipe(dest("assets/css"));
}

function js() {
    return src("assets/src/js/*.js")
        .pipe(concat("scripts.min.js"))
        .pipe(uglify())
        .pipe(dest("assets/js"));
}

exports.scss = scss;
exports.js = js;

exports.default = function () {
    watch("assets/src/sass/**/*.scss", { ignoreInitial: false }, scss);
    watch("assets/src/js/**/*.js", { ignoreInitial: false }, js);
};