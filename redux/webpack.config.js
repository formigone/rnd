module.exports = {
    entry: './main.js',
    output: {
        path: './',
        filename: 'bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                loader: 'babel',
                query: {
                    cacheDirectory: true,
                    optional: ['runtime'],
                    stage: 0
                }
            }
        ]
    },
    resolve: {
        extensions: ['', '.js']
    }
};
