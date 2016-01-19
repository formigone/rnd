module.exports = {
    entry: './main.jsx',
    output: {
        filename: 'bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                exclude: /node_modules/,
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
        react: 'React'
    },
    resolve: {
        extensions: ['', '.js', '.jsx']
    }
};
