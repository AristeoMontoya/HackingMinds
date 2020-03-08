const timeago = require('Timeago.js');


const helpers = {
    cuadrado: (n) => {
        return n*n;
    },
    times: (n, block) => {
        var accum = '';
        for(var i=0; i<n; ++i){
            accum+=block.fn(i);
        }
        return accum;
    }
};

helpers.tiempoago = (timestamp) => {
    console.log(timestamp);
    return format(timestamp);
}

module.exports = helpers;