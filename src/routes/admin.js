const express = require('express');
const router = express.Router();
const pool = require('../database');

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
    res.send('que bonita tu casita 8]');
});
router.post('/permisosDeUsuarios', async (req, res) => {
    res.send('usuario permisideichon 8]');
});
router.post('/generarReporte', async (req, res) => {
    res.send('reporte generado 8]');
});
module.exports = router;