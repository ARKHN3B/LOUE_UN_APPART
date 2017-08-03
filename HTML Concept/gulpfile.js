var gulp = require("gulp"); //Charge le task automater
var sass = require("gulp-sass"); //compilateur scss en css
var livereload = require('gulp-livereload');

gulp.task('sass', function(){

    return gulp.src('./styles/sass/**/*.scss') //fichier à traiter
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./styles/css'))
        .pipe(livereload());
});

gulp.task('htmlreload', function(){
    return gulp.src('./index.html')
        .pipe(livereload());
});

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch(['./styles/sass/**/*.scss', './*.html'], ['sass', 'htmlreload'])
});
