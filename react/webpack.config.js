module.exports = {
    entry: './js/index.jsx',
    output: {
        filename: 'bundle.js'
    },
    module: {
        loaders: [
            //{
            //    test: /\.jsx$/,
            //    loader: 'jsx-loader?harmony'
            //}

            {
                test: /\.jsx?$/,
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
    externals: {
        'react': 'React',
        'jquery': 'jQuery'
    },
    resolve: {
        extensions: ['', '.js', '.jsx']
    }
}
