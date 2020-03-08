const express = require('express');
//const request = require('request');
const router = express.Router();
const pool = require('../database');
const axios = require('axios');

router.get('/altaDeUsuario', (req, res) => {
    res.render('screens/adminDarDeAltaUsuario');
});
router.get('/altaDeCasa', (req, res) => {
    res.render('screens/adminDarDeAltaCasa');
});
router.get('/permisosDeUsuarios', (req, res) => {
    res.render('screens/adminQuitarDarPermisosAUsuarios');
});
router.get('/generarReporte', (req, res) => {
    res.render('screens/adminGenerarReporte');
});

router.post('/altaDeUsuario', async (req, res) => {
    res.send('usuario super si amiga 8]');
});
router.post('/altaDeCasa', async (req, res) => {
    axios.post('192.168.43.217:8000/zona', {
        nombre_zonas: 'Buy the milk',
        privadas: "1",
        limite_de_invitados: "15"
      })
      .then((res) => {
        console.log(`statusCode: ${res.statusCode}`);
        console.log(res);
      })
      .catch((error) => {
        console.error(error);
      });
    res.send('que bonita tu casita 8]');
});
router.post('/permisosDeUsuarios', async (req, res) => {
    res.send('usuario permisideichon 8]');
});
router.post('/generarReporte', async (req, res) => {
    res.send('reporte generado 8]');
});
module.exports = router;