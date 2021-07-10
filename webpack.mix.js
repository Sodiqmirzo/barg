const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
const autoprefixer = require("autoprefixer");
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


// mix.js("resources/js/app.js", "public/js")
mix.postCss('resources/css/app.css', 'public/css/styles.css')
    .options({
         postCss: [require('tailwindcss')],
         postCss: [require('autoprefixer')],
         postCss: [require('cssnano')],
         postCss: [require('precss')],
         postCss: [ tailwindcss('./tailwind.config.js') ]
    })
    .purgeCss({
        enabled: true,
    });

mix.disableNotifications();
