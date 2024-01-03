const {src, dest, watch, parallel, series} = require('gulp');
const scss = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const autoprefixer = require('gulp-autoprefixer');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');


function images() {
    return src('src/images/*.*')
        .pipe(newer('assets/images'))
        .pipe(imagemin())
        .pipe(dest('assets/images'));
}

function imagesBg() {
    return src('src/images/bg/*.*')
        .pipe(newer('assets/images/bg'))
        // .pipe(imagemin())
        .pipe(dest('assets/images/bg'));
}

function fonts() {
    return src('src/fonts/*.*')
        .pipe(newer('assets/fonts'))
        .pipe(imagemin())
        .pipe(dest('assets/fonts'));
}

function stylesTemplates() {
    return src(
        'src/styles/template-styles/*.scss',
    )
        .pipe(autoprefixer({overrideBrowserslist: ['last 10 versions']}))
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(dest('assets/styles/template-styles'));
}

function stylesTemplateParts() {
    return src('src/styles/template-parts-styles/*.scss')
        .pipe(autoprefixer({overrideBrowserslist: ['last 10 versions']}))
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(dest('assets/styles/template-parts-styles'));
}

function stylesSinglePages() {
    return src('src/styles/single-pages-styles/*.scss')
        .pipe(autoprefixer({overrideBrowserslist: ['last 10 versions']}))
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(dest('assets/styles/single-pages-styles'));
}

function styles() {
    return src(
        'src/styles/main.scss',
    )
        .pipe(autoprefixer({overrideBrowserslist: ['last 10 versions']}))
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(dest('assets/styles'));
}

function scripts() {
    return src([
        'src/scripts/*.js',
    ])
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(dest('assets/scripts'));
}

function scriptsTemplates() {
    return src([
        'src/scripts/template-scripts/*.js',
    ])
        .pipe(uglify())
        .pipe(dest('assets/scripts/template-scripts'));
}

function scriptsSinglePages() {
    return src(['src/scripts/single-pages-scripts/*.js'])
        .pipe(uglify())
        .pipe(dest('assets/scripts/single-pages-scripts'));
}

function scriptsTemplateParts() {
    return src(['src/scripts/template-parts-scripts/*.js'])
        .pipe(uglify())
        .pipe(dest('assets/scripts/template-parts-scripts'));
}

function watching() {
    watch('src/styles/*scss', styles);
    watch('src/styles/template-styles/*scss', stylesTemplates);
    watch('src/styles/template-parts-styles/*scss', stylesTemplateParts);
    watch('src/styles/single-pages-styles/*scss', stylesSinglePages);
    watch(['src/images'], images);
    watch(['src/images/bg/*.*'], imagesBg);
    watch(['src/fonts'], fonts);
    watch('src/scripts/*js', scripts);
    watch('src/scripts/template-scripts/*js', scriptsTemplates);
    watch('src/scripts/template-parts-scripts/*js', scriptsTemplateParts);
    watch('src/scripts/single-pages-scripts/*js', scriptsSinglePages);
}


exports.styles = styles;
exports.stylesTemplates = stylesTemplates;
exports.stylesTemplatesParts = stylesTemplateParts;
exports.stylesSinglePages = stylesSinglePages;
exports.images = images;
exports.imagesBg = imagesBg;
exports.fonts = fonts;
exports.scripts = scripts;
exports.scriptsTemplates = scriptsTemplates;
exports.scriptsTemplatesParts = scriptsTemplateParts;
exports.scriptsSinglePages = scriptsSinglePages;
exports.watching = watching;
exports.default = parallel(styles, stylesTemplates, stylesTemplateParts, stylesSinglePages, images, imagesBg, fonts, scripts, scriptsTemplates, scriptsTemplateParts, scriptsSinglePages, watching);
