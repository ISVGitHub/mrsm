const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 | app.scss default laravel complectation
 |
 */

elixir(function(mix) {
    mix.sass([
            /*'app.scss',*/
            'main.scss',
            'lists.scss'
        ],
        'public/css/mystyle_from_sass.css');
    mix.less([
            'advanced-read-more.less'
        ],
        'public/css/mystyle_from_less.css');
});

elixir(function(mix) {
    mix.copy('node_modules/readmore-js/readmore.js', 'resources/assets/js/readmore.js');
    mix.scripts([
        "scripts.js",
        "jquery.readmore-readless.js",
        "readmore.js"
    ])
        .scripts(["jquery-3.1.1.js"], 'public/js/jquery.js');
});

