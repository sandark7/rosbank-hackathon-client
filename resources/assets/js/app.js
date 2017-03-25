const __svg__ = {
  path: '../sprite/**/*.svg',
  name: 'sprite.svg'
};
const svgxhr = require('webpack-svgstore-plugin/src/helpers/svgxhr');

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

svgxhr(__svg__);
