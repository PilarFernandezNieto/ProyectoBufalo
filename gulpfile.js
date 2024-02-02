const {src, dest, watch, parallel} =  require("gulp");

// Dependencias CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
/** ESTAS FUNCIONALIDADES SE EJECUTAN AL FINAL DEL PROYECTO PARA REDUCIR CODIGO */
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const postcss = require("gulp-postcss");

const sourcemaps = require("gulp-sourcemaps");

// Dependencias imágenes
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const avif = require("gulp-avif");

//Dependencias js
const terser = require("gulp-terser-js");


function css(done) {
  src("src/scss/**/*.scss") // identificar archivo sass
    .pipe(sourcemaps.init({loadMaps: true})) //iniciar el mapa de archivos
    .pipe(plumber())
    .pipe(sass()) //compilar
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/css")); //almacenar en el disco duro
  done();
}
function imagenes(done){
  const opciones = {
    optimizationLeve: 3
  }
    src("src/img/**/*.{png,jpg}")
      .pipe(cache(imagemin(opciones)))
      .pipe(dest("build/img"));

  done();
}

function versionWebp(done){
  const opciones = {
    quality: 50
  }
  src("src/img/**/*.{png,jpg}")
  .pipe(webp(opciones))
  .pipe(dest("build/img"));

  done();
}
function versionAvif(done) {
  const opciones = {
    quality: 50,
  };
  src("src/img/**/*.{png,jpg,jpeg}")
  .pipe(avif(opciones))
  .pipe(dest("build/img"));

  done();
}

function javascript(done){
  src("src/js/**/*.js")
  .pipe(sourcemaps.init())
  .pipe(terser())
  .pipe(sourcemaps.write("."))
  .pipe(dest("build/js"));

  done();
}

function dev(done){
    watch("src/scss/**/*.scss", css);
    watch("src/js/**/*.js", javascript);
    done();
}

exports.css = css;
exports.javascript = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel(imagenes, versionWebp, versionAvif, javascript, dev);