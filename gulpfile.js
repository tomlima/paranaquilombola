const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
var uglify = require("gulp-uglify");
var concat = require("gulp-concat");
const cleanCSS = require("gulp-clean-css");

gulp.task("sass", function () {
	return gulp
		.src(["template-parts/**/*.scss", "assets/scss/global.scss"])
		.pipe(sass())
		.pipe(concat("styles.css"))
		.pipe(cleanCSS({ compatibility: "ie8" }))
		.pipe(gulp.dest("dist"));
});

gulp.task("scripts", function () {
	gulp
		.src(["template-parts/**/*.js"])
		.pipe(concat("functions.min.js"))
		.pipe(uglify())
		.pipe(gulp.dest("dist"));
});
