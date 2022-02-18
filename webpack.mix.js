const mix = require("laravel-mix");

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

mix.js("resources/js/admin-app.js", "public/js")
    .vue()
    .postCss("resources/css/admin-menu.css", "public/css", [
        //
    ]);

// mix.combine(
//     ["resources/js/app.js", "resources/js/admin-app.js"],
//     "public/js/app.js"
// )
//     .vue()
//     .postCss("resources/css/admin-menu.css", "public/css", []);
