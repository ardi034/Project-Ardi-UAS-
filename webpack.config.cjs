const path = require('path');

module.exports = {
  entry: './src/index.js',  // Adjust path as needed
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  mode: 'development', // Or 'production' depending on your need
};
