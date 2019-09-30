var stream = require('stream');
var mysql = require('mysql');
var util = require('util');
var db = require('../config/db.js');


module.exports = function(app){
    app.get('/', function(req, res){
      var GETTING_CATEGORY = "SELECT * FROM category";
      db.query(GETTING_CATEGORY, function (err, result, fields) {
        if (err) throw err;
        res.render('index', {categories: JSON.stringify (result)});
      });
    });
};
