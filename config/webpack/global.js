'use strict';

const webpack      = require('webpack');
const TextPlugin   = require('extract-text-webpack-plugin');
const autoprefixer = require('autoprefixer');
const SvgStore     = require('webpack-svgstore-plugin');

module.exports = (ENV, ROOT) => {
  const dependencies  = Object.keys(require(`${ROOT}/package`).dependencies);
  const rootAssetPath = `${ROOT}/resources/assets`;

  return {
    entry: {
      app: rootAssetPath + '/js/app.js',
      vendors: dependencies
    },

    output: {
      path: `${ROOT}/public/assets`,
      filename: '[name].js',
      chunkFilename: '[id].js',
      publicPath: '/assets/'
    },

    resolve: {
      extensions: ['', '.js', '.styl'],
      modulesDirectories: ['node_modules'],
      alias: {
        _nodemodules: `${ROOT}/node_modules/`,
        _stylesheets: rootAssetPath + '/stylus',
        _images: rootAssetPath + '/images'
      }
    },

    module: {
      loaders: [
        {
          test: /\.css$/,
          loader: TextPlugin.extract('style', 'css!postcss')
        },
        {
          test: /\.styl$/,
          loader: TextPlugin.extract('style', 'css!postcss!stylus')
        },
        {
          test: /\.(ttf|eot|woff|woff2|png|ico|jpg|jpeg|gif|svg)$/i,
          loader: 'file?context=' + rootAssetPath + '&name=assets/static/[ext]/[name].[hash].[ext]'
        },
        {
          loader: 'babel',
          test: /\.jsx?$/,
          query: {
            presets: ['es2015'],
            ignore: ['node_modules']
          }
        }
      ]
    },

    postcss: [
      autoprefixer({
        browsers: ['last 5 versions']
      })
    ],

    plugins: [
      new webpack.optimize.CommonsChunkPlugin('vendors', 'vendors.js'),
      new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery'
      }),
      new TextPlugin('[name].css'),
      new SvgStore()
    ]
  };
};
