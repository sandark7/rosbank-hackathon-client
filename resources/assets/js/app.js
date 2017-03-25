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

if ($('#popup').length) {
  let timeouts = [];

  $('#popupOpen').click(function() {
    timeouts.push(setTimeout(function() {
      $('#step_1').addClass('is-done');
      $('#step_2').removeClass('is-hidden');
    }, 2000));
    timeouts.push(setTimeout(function() {
      $('#step_2').addClass('is-done');
      $('#step_3').removeClass('is-hidden');
    }, 4000));
    timeouts.push(setTimeout(function() {
      $('#step_3').addClass('is-done');
      $('#closePopup').removeClass('is-hidden').siblings().addClass('is-hidden');
    }, 7000));
  });

  $('#cancelPopup').click(function() {
    $('#step_1').removeClass('is-done');
    $('#step_2').removeClass('is-done').addClass('is-hidden');
    $('#step_3').removeClass('is-done').addClass('is-hidden');
    for (let i = 0; i < timeouts.length; i++) {
      clearTimeout(timeouts[i]);
    }
  });

  $('#closePopup').click(function() {
    $('#app').find('.start').addClass('is-hidden').siblings('.finish').removeClass('is-hidden');
  });
}
