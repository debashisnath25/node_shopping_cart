var express = require('express');
var app = express();
var category = require('./controller/categories');
var product = require('./controller/products');

product(app);

const PORT = process.env.PORT || 3000
app.listen(PORT);
console.log('You app is live on port:' + PORT);
