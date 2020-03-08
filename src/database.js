const mysql = require('mysql');
const { promisify } = require('util');
const { database } = require('./keys');

const pool = mysql.createPool(database);

pool.getConnection((err, connection) => {
    if(err) {
        if  (err.code === 'PROTOCOL_CONNECTION_LOST') {
            console.log('La base de datos apagó su servidor');
        }
        else
        if(err.code === 'ER_CON_COUNT_ERROR') {
            console.log('La base de datos tiene demasiadas conecciones')
        }
        else
        if(err.code === 'ECONNREFUSED') {
            console.log('Conexión con base de datos ha sido rechazada');
        }
    }

    else {
        if(connection === 'BD ha sido  el ususio')
            console.log('La conexión con la base de datos fue exitosa');
        return;
    }
});

// de callbascks a promesas
pool.query = promisify(pool.query);

module.exports = pool;