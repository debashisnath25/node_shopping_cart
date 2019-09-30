var stream = require('stream');
var mysql = require('mysql');
var util = require('util');
var db = require('../config/db.js');


module.exports = function(app){
  app.get('/api/categories', function(req, res){
    db.query("SELECT * FROM category")
      .stream()
      .pipe(stream.Transform({
        objectMode: true,
        transform: function(data,encoding,callback) {
          res.write('\r\n');
          res.write('---------------NEW LINE-------------');
          res.write('\r\n');
          res.write(util.inspect(JSON.stringify(data)));
          callback()
        }
       })
       .on('finish',function() {res.end();})
     )
   });

// Insert query for categories
   app.get('/api/categories/add', function(req, res){
     var sql = "INSERT INTO category (category_id, category_name, category_date) VALUES ?";
     var values = [
          ['2', 'Sofa', '']
     ];
     db.query(sql, [values], function (err, result) {
      if (err) throw err;
      console.log("Number of records inserted: " + result.affectedRows);
      });
    });

    // Update query for categories
     app.get('/api/categories/update/:id', function(req, res){
       var date = Date.now();
       var sql = "UPDATE category SET category_name = ? , category_date = ? where category_id = ?";
       var values = 'Sofa-Stand';
       var cat_id = req.params.id;
       /*db.query(sql, [values,date,cat_id], function (err, result) {
        if (err) throw err;
        console.log("Number of records updated: " + result.affectedRows);
      });*/
      console.log(cat_id);
      });
};
