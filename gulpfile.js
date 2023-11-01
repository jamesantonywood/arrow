const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const sourcemaps = require('gulp-sourcemaps')
const cleanCSS = require('gulp-clean-css')
const webpack = require('webpack-stream')

gulp.task('sass', () => {
    return gulp
        .src('src/sass/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(
            cleanCSS({
                compatibility: 'ie8',
            }),
        )
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./elementor/assets/css'))
});

gulp.task('js', () => {
    return gulp.src('src/js/*.js')
        .pipe(webpack({
            mode: 'development',
            devtool: 'source-map',
            output: {
                filename: 'app.js',
            }
        }))
        .pipe(gulp.dest('./elementor/assets/js'))
});

gulp.task('watch', () => {
    gulp.watch('src/sass/**/*.scss', gulp.series('sass'))
    gulp.watch('src/js/**/*.js', gulp.series('js'))
});

gulp.task('default', gulp.series('sass', 'js', 'watch'))