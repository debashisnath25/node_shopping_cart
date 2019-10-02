var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var db = require('../config/db.js');
const Entities = require('html-entities').AllHtmlEntities;
var entities = new Entities();

/* GET home page. */
router.get('/', function(req, res, next) {
  var GETALL_CATEGORIES = "SELECT * FROM category";
  db.query(GETALL_CATEGORIES, function (err, result, fields) {
    if (err) throw err;
    res.render('index', {categories: result});
  });
  /*var header_categories = require('./categories.js');
  console.log(header_categories);
  res.render('index',{categories: header_categories});*/
  //res.render('index', { title: 'Express' });
});

module.exports = router;
