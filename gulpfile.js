var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('scss', function(done) {
gulp.src('assets/scss/*.scss')
.pipe(sass().on('error', sass.logError))
.pipe(gulp.dest('public/css/'))
done();
});

gulp.task('watch', function(done){
gulp.watch('assets/scss/*.scss', gulp.series('scss'));
done();
});

gulp.task('default', gulp.series('watch'));
