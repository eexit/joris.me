const express = require('express'),
    app = express(),
    path = require('path'),
    bunyan = require('bunyan'),
    serveStatic = require('serve-static'),
    logger = bunyan.createLogger({
        name: 'joris.me',
        serializers: bunyan.stdSerializers,
        level: 'info',
        src: false
    });

app.use('/ui', express.static('ui'));
app.use('/img', express.static('img'));
app.use('/get', express.static('resume'));
app.use(require('express-bunyan-logger')({
    logger: logger.child({level: 'warn'})
}));

app.get('/', (req, res, next) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});
app.get('/index.rdf', (req, res, next) => {
    res.sendFile(path.join(__dirname, 'index.rdf'));
});
app.listen(8080, () => logger.info('Started joris.me on :8080'));
