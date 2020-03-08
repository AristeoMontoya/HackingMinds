const express = require('express');
const router = express.Router();

router.get('/', async (req, res) => {
    res.render("");
});
router.get('/cambiarCodigo', async (req, res) => {
    res.render("screens/visitaCodigo");
});
router.post('/', async (req, res) => {
    res.send('sesión iniciada 8]');
});
router.post('/cambiarCodigo', async (req, res) => {
    res.send('código cambiado 8]');
});
module.exports = router;