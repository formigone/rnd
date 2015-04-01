var fs = require('fs');
var filename = process.argv[2];

if (!filename) {
    console.log('Usage: ' + process.argv[1] + ' INPUT_FILENAME');
    return -1;
}

fs.readFile(filename, function(err, data){
    if (err) {
        throw err;
    }

    console.log('\n  processing ' + filename + '\n');

    var res = data.toString().match(/404: \/(.*?)\n/g);
    var uniq = {};

    for (var i = 0, len = res.length; i < len; i++) {
        uniq[res[i].slice('404: '.length, -1)] = true;
    }

    uniq = Object.keys(uniq);

    for (var i = 0, len = uniq.length; i < len; i++) {
        console.log(uniq[i]);
    }
});
