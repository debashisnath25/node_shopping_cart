var express = require('express');
var mysql = require('mysql');
var db = require('../config/db.js');
const Entities = require('html-entities').AllHtmlEntities;
var entities = new Entities();

module.exports = function(app){
  app.use(function(err, req, res, next) {
    // set locals, only providing error in development
    var GETALL_CATEGORIES = "SELECT * FROM category";
    db.query(GETALL_CATEGORIES, function (err, result, fields) {
      if (err) throw err;
      res.locals.categoriess = "hello world";
    });
  });
}
