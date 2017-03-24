
window._ = require('lodash');

window.$ = window.jQuery = require('jquery');

require('bootstrap-styl');

window.axios = require('axios');

window.axios.defaults.headers.common = {
    // 'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};
