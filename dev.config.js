var HtmlWebpackPlugin = require('html-webpack-plugin');
var webpack = require('webpack');

module.exports = {
    mode: 'development',
    entry: {
        app: './src/index.js'
    },
    resolve: {
        alias: {
            app: '/src/app'
        }
    },
    output: {
        filename: 'dev/builder.js'
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        }),
        new HtmlWebpackPlugin({
            template: './index.html',
            filename: 'dev/index.html'
        })
    ],
    module: {
        rules: [
            {
                test: /\.(js)$/,
                exclude: /(node_modules)/,
                use: 'jshint-loader'
            },
            {
                test: /\.(js)$/,
                exclude: /(node_modules)/,
                loader: 'babel-loader',
                query: {
                    presets: ['@babel/preset-env']
                }
            }
        ]
    },
    devServer: {
        compress: true,
        contentBase: 'dist/dev',
        host: 'builder.local',
        open: true,
        port: 80,
        watchContentBase: true
    },
    watch: true
};