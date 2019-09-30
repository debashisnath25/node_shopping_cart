const express = require('express');
const app = express();
const routes = require('./controller/routes');
//var category = require('./controller/categories');
//var product = require('./controller/products');

//setup template engine
app.set('view engine', 'ejs');


//static files midleware using
app.use("/public", express.static(__dirname + '/public'));

routes(app);

const PORT = process.env.PORT || 3000
app.listen(PORT);
console.log('You app is live on port:' + PORT);
