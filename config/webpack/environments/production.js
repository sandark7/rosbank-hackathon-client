'use strict';

module.exports = (ENV, ROOT) => {
  return {
    context: ROOT,
    debug: false,
    devtool: 'cheap-source-map',
    output: {
      publicPath: '/assets/'
    }
  };
};
