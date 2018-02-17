const path = require('path')
const webpack = require('webpack')

module.exports = {
  entry: './app/js/main.js',
  output: {
    filename: 'main.min.js',
    path: path.resolve(__dirname, 'dist/js'),
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      }
    ],
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: "jquery",
      "window.jQuery": "jquery"
    }),
  ]
};
