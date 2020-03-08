const express = require('express');
const router = express.Router();
const pool = require('../database');

router.get('/altaDePrivada', async (req, res) => {
    res.render('screens/superUsuarioDarDeAltaPrivada');
});
router.get('/altaDeZona', async (req, res) => {
    res.render('screens/superUsuarioDarDeAltaZona');
});
router.get('/altaDeAdministrador', async (req, res) => {
    res.render('screens/superUsuarioDarDeAltaAdministrador');
});
router.get('/otorgarDenegarPermisos', async (req, res) => {
    res.render('screens/superOtorgarDenegarPermisos');
});
router.get('/configurarEquipos', async (req, res) => {
    res.render('screens/superConfigurarEquipos');
});

router.post('/altaDePrivada', async (req, res) => {
    res.send('alta de privada 8]');
});
router.post('/altaDeZona', async (req, res) => {
    res.send('alta de zona 8]');
});
router.post('/altaDeAdministrador', async (req, res) => {
    res.send('alta de administrador 8]');
});
router.post('/otorgarDenegarPermisos', async (req, res) => {
    res.send('otorgar o denegar permisos 8]');
});
router.post('/configurarEquipos', async (req, res) => {
    res.send('equipos configurados 8]');
});

module.exports = router;