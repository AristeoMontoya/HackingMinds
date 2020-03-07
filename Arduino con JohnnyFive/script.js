var five = require ('johnny-five');
var board = new five.Board();


board.on('ready', function() {

    console.log('Listo para usar Arduino');
    var relay = new five.Relay(12)
    this.repl.inject(
        {
            relay:five.Relay(12)
        });


});