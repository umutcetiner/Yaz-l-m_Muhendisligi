var PROD = process.argv.indexOf('-p') >= 0;

module.exports = {
    entry: {
        'echarts': __dirname + '/index.php.js',
        'echarts.simple': __dirname + '/index.php.simple.js',
        'echarts.common': __dirname + '/index.php.common.js'
    },
    output: {
        libraryTarget: 'umd',
        library: 'echarts',
        path: __dirname + '/dist',
        filename: PROD ? '[name].min.js' : '[name].js'
    }
};