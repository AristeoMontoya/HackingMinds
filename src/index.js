const express = require('express');
const morgan = require('morgan');
const exphbs = require('express-handlebars');
const path = require('path');

// inicializaciones
const app = express();

// settings
app.set('port', process.env.PORT || 6969);
app.set('views', path.join(__dirname, 'views'));
app.engine('.hbs', exphbs({
    defaultLayout: 'main',
    layoutsDir: path.join(app.get('views'), 'layouts'),
    partialsDir: path.join(app.get('views'), 'partials'),
    extname: '.hbs',
    helpers: require('./lib/handlebars')
}));
app.set('view engine', '.hbs');
app.use(express.urlencoded({extended: false}));
app.use(express.json());

// middlewares
app.use(morgan('dev'));

// variables globales
app.use((req, res, next) => {
    next();
});

// rutas
app.use(require('./routes'));
app.use('/super', require('./routes/super'));
app.use('/admin', require('./routes/admin'));
app.use('/usuario', require('./routes/usuario'));
//app.use(require('./routes/autenticacion'));

// archivos publicos
app.use(express.static(path.join(__dirname, )));

// iniciar el servidor
app.listen(app.get('port'), (req, res) => {
    console.log('Servidor funcionando en el puerto ', app.get('port'));
});