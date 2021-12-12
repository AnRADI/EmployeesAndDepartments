
// ------ Include modules(npm, includes) -------

window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

require('bootstrap');

require('./includes/select2.min');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


// ------ Include modules(pages) -------

require('./pages/teachers/create');
require('./pages/teachers/edit');


// ------ App Code -------