var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var db = require('../config/db.js');
const Entities = require('html-entities').AllHtmlEntities;
var entities = new Entities();

/* GET home page. */
router.all('*',function(req, res, next) {
  var GETALL_CATEGORIES = "SELECT * FROM category";
  db.query(GETALL_CATEGORIES, function (err, result, fields) {
    if (err) throw err;
    res.locals.user = result;
  });
});

module.exports = router;
