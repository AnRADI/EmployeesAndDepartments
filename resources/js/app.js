
// ------ Include modules -------

window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

require('bootstrap');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import { setLogLevel } from 'webpack/hot/log';


// ------- Clear console --------

console.clear();
setLogLevel('none');

console.info = function () {
    if (arguments[0].indexOf('[webpack-dev-server]') == -1)
        return console.info.apply(console, arguments);
};
