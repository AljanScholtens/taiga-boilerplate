/**
 * Paths to project folders
 */

var paths = {
  input: "src/",
  output: "dist/",
  scripts: {
    input: "src/assets/scripts/*",
    output: "dist/assets/scripts/"
  },
  styles: {
    input: [
      "src/assets/stylesheets/styles.css",
      "src/assets/stylesheets/styleguide.css"
    ],
    output: "dist/assets/stylesheets/"
  },
  fonts: {
    input: "src/assets/fonts/**/*",
    output: "dist/assets/fonts/"
  },
  images: {
    input: "src/assets/images/**/*",
    output: "dist/assets/images/"
  },
  media: {
    input: "src/media/**/*",
    output: "dist/media/"
  },
  html: {
    input: "src/**/*.html",
    output: "dist/"
  },
  reload: "./dist/"
};

/**
 * Gulp Packages
 */

// General
var { src, dest, watch, series, parallel } = require("gulp");
var del = require("del");
var flatmap = require("gulp-flatmap");
var lazypipe = require("lazypipe");
var sourcemaps = require("gulp-sourcemaps");
var package = require("./package.json");

// Scripts
var jshint = require("gulp-jshint");
var concat = require("gulp-concat");
var uglify = require("gulp-terser");
var optimizejs = require("gulp-optimize-js");

// Styles
var postcss = require("gulp-postcss");
var postcssPresetEnv = require("postcss-preset-env");
var postcssImport = require("postcss-import");
var cssnano = require("cssnano");
var purgecss = require("@fullhuman/postcss-purgecss");
var reporter = require("postcss-reporter");

// BrowserSync
var browserSync = require("browser-sync");

// Nunjucks
var nunjucks = require("gulp-nunjucks");

/**
 * Export tasks
 */

// Watch for changes to the src directory
var startServer = function(done) {
  // Initialize BrowserSync
  browserSync.init({
    server: {
      baseDir: paths.reload,
      serveStaticOptions: {
        extensions: ["html"]
      }
    },
    open: false
  });

  done();
};

// Reload the browser when files change
var reloadBrowser = function(done) {
  browserSync.reload();
  done();
};

// Watch for changes
var watchSource = function(done) {
  watch(paths.input, series(exports.default, reloadBrowser));
  done();
};

// Remove pre-existing content from output folders
var cleanDist = function(done) {
  // Clean the dist folder
  del.sync([paths.output]);
  return done();
};

function buildHtml() {
  return src(paths.html.input)
    .pipe(nunjucks.compile())
    .pipe(dest(paths.html.output));
}

var buildStyles = function(done) {
  return src(paths.styles.input)
    .pipe(sourcemaps.init())
    .pipe(
      postcss([
        postcssImport,
        purgecss({
          content: [paths.html.input],
          rejected: true
        }),
        postcssPresetEnv({
          stage: 0,
          browsers: "last 2 versions",
          features: {
            "color-mod-function": { unresolved: "warn" }
          }
        }),
        reporter({
          filter: function(message) {
            return true;
          }
        }),
        cssnano({
          discardComments: {
            removeAll: true
          }
        })
      ])
    )
    .pipe(sourcemaps.write("."))
    .pipe(dest(paths.styles.output));
};

// Repeated JavaScript tasks
var jsTasks = lazypipe()
  .pipe(sourcemaps.init)
  .pipe(uglify)
  .pipe(optimizejs)
  .pipe(sourcemaps.write, ".")
  .pipe(dest, paths.scripts.output);

var buildScripts = function(done) {
  // Run tasks on script files
  return src(paths.scripts.input).pipe(
    flatmap(function(stream, file) {
      // If the file is a directory
      if (file.isDirectory()) {
        // Grab all files and concatenate them
        src(file.path + "/*.js")
          .pipe(concat(file.relative + ".js"))
          .pipe(jsTasks());

        return stream;
      }

      // Otherwise, process the file
      return stream.pipe(jsTasks());
    })
  );
};

// Lint scripts
var lintScripts = function(done) {
  // Lint scripts
  return src(paths.scripts.input)
    .pipe(jshint())
    .pipe(jshint.reporter("jshint-stylish"));
};

// Copy static files into output folder
var copyFiles = function(done) {
  src(paths.media.input).pipe(dest(paths.media.output));
  src(paths.fonts.input).pipe(dest(paths.fonts.output));
  return src(paths.images.input).pipe(dest(paths.images.output));
};

/**
 * Export tasks
 */

exports.default = series(
  cleanDist,
  parallel(buildScripts, buildStyles, buildHtml, lintScripts, copyFiles)
);

exports.watch = series(exports.default, startServer, watchSource);
