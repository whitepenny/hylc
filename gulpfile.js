// Utilities
var gulp = require('gulp');
var livereload = require('gulp-livereload');
var log = require('fancy-log');
var beeper = require('beeper');
var plumber = require('gulp-plumber');
var include = require('gulp-include');
var rename = require('gulp-rename');
var cache = require('gulp-cache');


// CSS
var postcss = require('gulp-postcss');
var cssImport = require('postcss-import');
var mixins = require('postcss-mixins');
var simpleVars = require('postcss-simple-vars');
var nested = require('postcss-nested');
var color = require('postcss-color-function');
var autoprefixer = require('autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');


// JS
var uglify = require('gulp-uglify');

//Images
var imagemin = require('gulp-imagemin');
var svgSprite = require('gulp-svg-sprites');



var theme_dir = 'wp-content/themes/hylc/';
var www_dir = '/Users/srevell/www/sites/hylc/htdocs';

var onError = function (err) {
  log.error(err);
  beeper(3);
};

gulp.task('css', function(){
  var processors = [
    cssImport,
    mixins,
    simpleVars,
    nested,
    color,
    autoprefixer({browsers: ['last 2 versions']}),
  ];
  return gulp.src(theme_dir + 'css/style.css')
    .pipe(plumber({
        errorHandler: onError
    }))
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(cleanCSS({
      compatibility: 'ie10',
      inline: ['none']
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(theme_dir + 'dist/'))
    .pipe(livereload());

});

// Sprites
gulp.task('sprites', function () {
  return gulp.src(theme_dir + 'lib/svg/*.svg')
    .pipe(svgSprite({
      preview: false,
      cssFile: 'css/_sprites.css',
      padding: 5
    }))
    .pipe(gulp.dest(theme_dir + 'dist/img/'))
});

gulp.task('scripts', function () {
    return gulp.src(theme_dir + 'lib/script.js')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(include({
            extensions: 'js',
            includePaths: [
              www_dir + '/node_modules'
            ]
        }))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(theme_dir + 'dist/'))
});

gulp.task('images', function() {
  return gulp.src(theme_dir + 'dist/img/*')
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest(theme_dir + 'dist/img/'))
});


gulp.task('watch', function() {
    livereload.listen();
    gulp.watch(theme_dir + 'lib/svg/**/*.svg', ['sprites']);
    gulp.watch(theme_dir + 'css/**/*.css', ['css']);
    gulp.watch(theme_dir +'lib/**/*.js', ['scripts']);
    gulp.watch([theme_dir +'dist/**/*', theme_dir +'**/*.php']).on(['change'], livereload.changed);

});


gulp.task('default', ['css', 'scripts', 'sprites', 'images', 'watch']);


