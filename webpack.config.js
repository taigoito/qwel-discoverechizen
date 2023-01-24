module.exports = {
  mode: 'production',
  entry: './js/init.js',
  output: {
   path: `${__dirname}/`,
   filename: 'init.js'
  },
  module: {
   rules: [
    {
     test: /.js$/,
     use: {
      loader: 'babel-loader',
      options: {
       presets: ['@babel/preset-env']
      }
     }
    }
   ]
  }
 }
