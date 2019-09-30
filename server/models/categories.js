var stream = require('stream');
var mysql = require('mysql');
var util = require('util');
var db = require('../config/db.js');


function get_allcategories(){
      var GETTING_CATEGORY = "SELECT * FROM category";
      var cat = db.query(GETTING_CATEGORY, function (err, result, fields) {
        if (err) throw err;

        //res.render('products', {data: JSON.stringify (result)});
      });
      return cat;
};
module.exports = get_allcategories;
