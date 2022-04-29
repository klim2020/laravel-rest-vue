const mix = require('laravel-mix');
path = require('path');


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

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

mix.alias({
    //'vue$': 'vue/dist/vue.esm.js',
    '@': path.resolve('resources/render/apivue/src')
    //'ext': path.resolve('node_modules'),
})
mix.webpackConfig({
    resolve: {
        modules: ['resources/render/apivue/node_modules']
    }
});

mix.js('resources/render/apivue/src/main.js', 'dist').setPublicPath('dist');
