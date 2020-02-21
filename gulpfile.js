var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass({
            sourceMap: true,
            sourceMapEmbed: true,
            outFile: './css/style.css',
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 10 versions']
        }))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function(){
    gulp.watch(['./src/sass/**/*.sass', './src/sass/**/*.scss'], gulp.series('sass'));
});

gulp.task('default', function(){
    console.log("It's alive!")
});
