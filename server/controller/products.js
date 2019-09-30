var stream = require('stream');
var mysql = require('mysql');
var util = require('util');
var db = require('../config/db.js');


module.exports = function(app){
  app.get('/products', function(req, res){

    db.query("SELECT * FROM supplier_service")
      .stream()
      .pipe(stream.Transform({
        objectMode: true,
        transform: function(data,encoding,callback) {
          //res.writeHead(200, {'Content-Type': 'text/html'});
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
};
