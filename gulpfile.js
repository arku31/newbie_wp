'use strict';
const fs = require('fs');

// plugins
const gulp = require('gulp')
const pug = require('gulp-pug')
const sass = require('gulp-sass')
const sassGlob = require('gulp-sass-glob')
const browserSync = require('browser-sync').create()
const reload = browserSync.reload
const uglify = require('gulp-uglify')
const rename = require("gulp-rename")
const browserify = require('gulp-browserify')
const plumber = require('gulp-plumber')
const useref = require('gulp-useref')
const gulpif = require('gulp-if')
const cssnano = require('gulp-cssnano')
const autoprefixer = require('gulp-autoprefixer')
const sourcemaps = require('gulp-sourcemaps')
const imagemin = require('gulp-imagemin')
const urlAdjuster = require('gulp-css-url-adjuster')
const cssunit = require('gulp-css-unit')
const svgSprite = require('gulp-svg-sprite')
const rsp = require('remove-svg-properties')
const gcmq = require('gulp-group-css-media-queries')
const webpack = require('webpack')
const webpackStream = require('webpack-stream')

// paths
const SRC_PATH = 'app';
const DIST_PATH = 'dist';

var paths = {
  pug: {
    src: SRC_PATH + '/templates/**/*.pug',
    pages: SRC_PATH + '/templates/pages/*.pug',
    dist: DIST_PATH + '/'
  },

  scss: {
    src: SRC_PATH + '/css/**/*.scss',
    entry: SRC_PATH + '/css/main.scss',
    dist: DIST_PATH + '/css'
  },

  js: {
    src: SRC_PATH + '/js/**/*.js',
    entry: SRC_PATH + '/js/main.js',
    dist: DIST_PATH + '/js'
  },

  img: {
    src: SRC_PATH + '/img/**/*.*',
    dist: DIST_PATH + '/img'
  },

  fonts: {
    src: SRC_PATH + '/fonts/**/*.*',
    dist: DIST_PATH + '/fonts'
  },

  browserSync: {
    baseDir: './' + DIST_PATH,
    watchPaths: [SRC_PATH + '/templates/pages/*.pug', DIST_PATH + 'css/*.css', DIST_PATH + 'js/*.js']
  }
};

// pug
gulp.task('pug', function () {
  return gulp.src(paths.pug.pages)
    .pipe(plumber())
    .pipe(pug({
      pretty: true,
      locals: JSON.parse(fs.readFileSync('./content.json', 'utf8')),
      basedir: './'
    }))
    .pipe(useref())
    .pipe(sourcemaps.init())
    .pipe(gulpif('*.js', uglify()))
    .pipe(gulpif('*.css', cssnano()))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.pug.dist))
    .pipe(reload({ stream: true }));
});

// sass
gulp.task('sass', function () {
  return gulp.src(paths.scss.entry)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['> 5%'],
      cascade: false
    }))
    .pipe(urlAdjuster({
      replace: ['../../', '../']
    }))
    .pipe(cssunit({
      type: 'px-to-rem',
      width: 16
    }))
    .pipe(gcmq())
    .pipe(cssnano())
    .pipe(sourcemaps.write())
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest(paths.scss.dist))
    .pipe(reload({ stream: true }));
});

// server
gulp.task('sync', function () {
  browserSync.init({
    open: false,
    server: {
      baseDir: paths.browserSync.baseDir
    }
  });
});

// scripts
gulp.task('scripts', function () {
  return gulp.src(paths.js.entry)
    .pipe(plumber())
    .pipe(webpackStream(require('./webpack.config.js'), webpack))
    .on('error', function handleError() {
      this.emit('end'); // Recover from errors
    })
    .pipe(uglify())
    .pipe(gulp.dest(paths.js.dist))
    .pipe(reload({ stream: true }));
});

// images
gulp.task('images', function () {
  return gulp.src(paths.img.src)
    .pipe(imagemin([
      imagemin.svgo({
        plugins: [
          { removeUselessDefs: false },
          // { cleanupIDs: false}
          { cleanupIDs: true }
        ]
      }),
      imagemin.gifsicle(),
      imagemin.jpegtran(),
      imagemin.optipng()
    ]))
    .pipe(gulp.dest(paths.img.dist))
    .pipe(reload({ stream: true }));
});

gulp.task('sprite:svg', function () {
  var config = {
    shape: {
      spacing: {
        padding: 5
      }
    },
    mode: {
      symbol: {
        dest: './dist/img/sprite',
        sprite: 'sprite.svg'
      }
    }
  };

  rsp.remove({
    src: './dist/img/sprite/sprite.svg',
    out: './dist/img/sprite/',
    stylesheets: false,
    properties: ['fill']
  });

  return gulp.src('./app/img/icons/*.svg')
    .pipe(svgSprite(config))
    .pipe(gulp.dest('.'));
});
// C:/OpenServer/domains/localhost
// http://localhost/
// fonts
gulp.task('fonts', function () {
  return gulp.src(paths.fonts.src)
    .pipe(gulp.dest(paths.fonts.dist))
});

// watch
gulp.task('watch', function () {
  gulp.watch(paths.pug.src, gulp.series('pug'))
  gulp.watch(paths.scss.src, gulp.series('sass'))
  gulp.watch(paths.js.src, gulp.series('scripts'))
  gulp.watch(paths.img.src, gulp.series('images'))
});


/* --------- default --------- */
gulp.task('default', gulp.series(
  gulp.parallel('pug', 'sass', 'scripts', 'images', 'sprite:svg', 'fonts'),
  gulp.parallel('sync', 'watch')
));