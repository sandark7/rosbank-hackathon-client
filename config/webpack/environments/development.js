'use strict';


module.exports = (ENV, ROOT) => {
  return {
    context: ROOT,
    debug: true,
    devtool: 'eval',
    module: {
      preLoaders: [
        {
          test: /\.js$/,
          loader: 'eslint',
          exclude: [/node_modules/]
        }, {
          test: /\.styl$/,
          loader: 'stylint',
          exclude: [/node_modules/]
        }
      ]
    },
    devServer: {
      host: '0.0.0.0',
      watchOptions: {
        poll: true
      },
      port: 8080,
      inline: true,
      proxy: {
        '**': 'http://0.0.0.0:8000'
      }
    }
  };
};

