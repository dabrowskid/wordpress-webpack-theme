var webpack = require('webpack');
var path = require('path');

var ExtractTextPlugin = require("extract-text-webpack-plugin");

var DEST = path.resolve(__dirname, "dist");


module.exports = {
    entry: [
            ExtractTextPlugin.extract('style', 'css!less!bootstrap-webpack/bootstrap-styles!./bootstrap.config.js'),
    'bootstrap-webpack/bootstrap-scripts!./bootstrap.config.js',
            "./src/entry.js"
           ],
    loader: [
        {
            test: /\.(css|less)$/,
            loader: ExtractTextPlugin.extract('style', 'css!less')
    }
  ],
    output: {
        path: DEST,
        filename: "bundle.js"
    },

    module: {
        loaders: [
            {
                test: /\.css$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader")
            },
            {
                test: /\.less$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader!less-loader")
            },
            {
                test: /\.(woff|woff2)$/,
                loader: "url-loader?limit=10000&mimetype=application/font-woff"
            },
            {
                test: /\.ttf$/,
                loader: "file-loader"
            },
            {
                test: /\.eot$/,
                loader: "file-loader"
            },
            {
                test: /\.svg$/,
                loader: "file-loader"
            }
        ]
    },

    resolve: {
        modulesDirectories: ["web_modules", "node_modules", "bower_components"]
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
        }),
          new ExtractTextPlugin(path.resolve(DEST, "/style.css"), {
            allChunks: true
        })
  ]
};
