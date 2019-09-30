var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var db = require('../config/db.js');

/* GET home page. */
router.get('/', function(req, res, next) {
  var PREPARING_BUNDLE_ALLDATA = "SELECT * FROM category";
  db.query(PREPARING_BUNDLE_ALLDATA, function (err, result, fields) {
    if (err) throw err;
    res.render('index', {categories: JSON.stringify (result)});
  });
  //res.render('index', { title: 'Express' });
});

module.exports = router;
