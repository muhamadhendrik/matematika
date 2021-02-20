const mix = require("laravel-mix");

/*
test upstream
 */

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
