var express = require('express');
var router = express.Router();
var mysql = require('mysql');
var db = require('../config/db.js');
var Entities = require('html-entities').XmlEntities;
var entities = new Entities();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('add_categories',{data: "yolo yolo"});
});

router.post('/add', function(req, res, next) {
  var categoryName = req.body.category_name;
  var categoryImg = entities.encode(req.body.images);
  var data = [{
    category_name: categoryName,
    categoryImg: categoryImg
  }];
  console.log(data);
  res.render('add_categories',{data: data});
});

module.exports = router;
