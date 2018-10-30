const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


/*

.extract([
        'vue',
        'vuex',
        'brace',
        'axios',
        'jquery',
        'lodash',
        'hint.css',
        'nprogress',
        'pusher-js',
        'clipboard',
        'vue-router',
        'vuedraggable',
        'laravel-echo',
        'moment-timezone',
        'filesize-parser',
        'lodash-inflection',
        'moment-precise-range-plugin'
    ])
*/

if (mix.inProduction) {
    mix.styles([
        'resources/assets/metronic/global/plugins/font-awesome/css/font-awesome.css',
        'resources/assets/metronic/global/plugins/bootstrap/css/bootstrap.min.css',
        'resources/assets/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'resources/assets/metronic/global/css/components.min.css',
        'resources/assets/metronic/global/css/plugins.min.css',
        'resources/assets/metronic/global/plugins/select2/css/select2.min.css',
        'resources/assets/metronic/global/plugins/select2/css/select2-bootstrap.min.css',
        'resources/assets/metronic/global/plugins/jcrop/jquery.Jcrop.min.css',
        'resources/assets/metronic/global/plugins/jquery-nestable/jquery.nestable.css',
        'resources/assets/metronic/layouts/layout/css/layout.min.css',
        'resources/assets/metronic/layouts/layout/css/themes/darkblue.min.css',
        'resources/assets/metronic/pages/css/login.min.css',
        'resources/assets/metronic/global/plugins/toastr/build/toastr.min.css',
        'resources/assets/metronic/global/plugins/sweetalert-master/dist/sweetalert.css',
        'resources/assets/metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'resources/assets/metronic/global/plugins/jquery-ui/jquery-ui.min.css',
        'resources/assets/metronic/global/plugins/timepicker/jquery-ui-timepicker-addon.css',
        'resources/assets/metronic/global/plugins/x-editable/x-editable.css',
        'resources/assets/metronic/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css',
        'resources/assets/metronic/global/plugins/jstree/style.min.css',

    ], 'public/css/admin_assets.css')
    ;

    mix.scripts([
        'resources/assets/metronic/global/plugins/jquery.min.js',
        'resources/assets/metronic/global/plugins/jquery-ui/jquery-ui.min.js',
        'resources/assets/metronic/global/plugins/bootstrap/js/bootstrap.min.js',
        'resources/assets/metronic/global/plugins/js.cookie.min.js',
        'resources/assets/metronic/global/plugins/jquery.blockui.min.js',
        'resources/assets/metronic/global/plugins/jquery-nestable/jquery.nestable.js',
        'resources/assets/metronic/global/scripts/app.min.js',
        'resources/assets/metronic/pages/scripts/ui-nestable.js',
        'resources/assets/metronic/layouts/layout/scripts/layout.min.js',
        'resources/assets/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'resources/assets/metronic/global/plugins/select2/js/select2.full.min.js',
        'resources/assets/metronic/global/plugins/jcrop/jquery.Jcrop.min.js',
        'resources/assets/metronic/global/plugins/timepicker/jquery-ui-timepicker-addon.js',
        'resources/assets/metronic/global/plugins/x-editable/x-editable.js',
        'resources/assets/metronic/global/plugins/toastr/build/toastr.min.js',
        'resources/assets/metronic/global/plugins/sweetalert-master/dist/sweetalert.min.js',
        'resources/assets/metronic/global/plugins/bootstrap-contextmenu/bootstrap-contextmenu.js',
        'resources/assets/metronic/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        'resources/assets/metronic/global/plugins/jstree/jstree.min.js',
        'resources/assets/metronic/pages/scripts/ui-tree.min.js',
    ], 'public/js/admin/admin_assets.js');
}

/*
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
*/

/*

npm run watch-production




mix.js('resources/js/app.js', 'public/js')
   .sourceMaps();
   .webpackConfig({
        devtool: 'source-map'
    })

mix.js('resources/js/app.js', 'public/js');




* */
