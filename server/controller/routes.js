var db = require('../config/db.js');

module.exports = function(app){
  app.get('/', function(req, res){
    const categories = require('../models/categories');
    res.render('index', {categories: categories});
  });
};
