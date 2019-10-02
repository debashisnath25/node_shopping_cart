var mysql = require('mysql');

// const connection = mysql.createConnection({
//   // properties
//   host: 'localhost',
//   user: 'root',
//   password: '',
//   database: 'node_shop'
// })

const connection = mysql.createConnection({
  // properties
  host: 'ec2-3-15-170-194.us-east-2.compute.amazonaws.com',
  user: 'clickrstop',
  password: 'Samadder5#',
  database: 'nodee'
})

connection.connect(function(err) {
    if (err) throw err;
    console.log('database connected!');
});

module.exports = connection;
