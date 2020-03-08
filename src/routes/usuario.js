const express = require('express');
const router = express.Router();
const pool = require('../database');

router.get('/otorgarAcceso', async (req, res) => {
    res.render('screens/usuarioOtorgarAcceso');
});
router.get('/altaDeEventos', async (req, res) => {
    res.render('screens/usuarioDarDeAltaEventos');
});

router.post('/otorgarAcceso', async (req, res) => {
    res.send('otorgar acceso a quien sabe que cosa 8]');
});
router.post('/altaDeEventos', async (req, res) => {
    res.send('dar de alta evento 8]');
});

module.exports = router;