window._ = require('lodash');

window.$ = window.jQuery = require('jquery');

require('_nodemodules/bootstrap/dist/js/bootstrap.min.js');
require('bootstrap-select');
require('_stylesheets/app');

window.axios = require('axios');

window.axios.defaults.headers.common = {
  // 'X-CSRF-TOKEN': window.Laravel.csrfToken,
  'X-Requested-With': 'XMLHttpRequest'
};
