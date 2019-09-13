module.exports = {
    mode : 'development',
    entry: {
      app: __dirname + '/index.js',
    },
    output: {
      path: __dirname + '/js',
      filename: 'app.js'
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          loader: 'babel-loader',
          query: {
            presets: ['es2016','react']
          },
        //   exclude: /node_modules/,
            exclude: [
                // /wp-content/, 
                // /wp-admin/, 
                // /wp-includes/, 
                /node_modules/
            ]
        }
      ]
    }
  }