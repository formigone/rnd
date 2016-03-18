var express = require('express');
var router = express.Router();

var mongoose = require('mongoose');
mongoose.connect('mongodb://127.0.0.1:27017/explorr');

/* GET home page. */
router.get('/', function(req, res) {
   var db = mongoose.connection;
   console.log('here');

   db.on('error', function(err){
      console.log('  err');
      go(err);
   });

   db.on('open', function(){
      console.log('  open');
      go('mongodb');
   });

   setTimeout(function(){
      go('timed out');
   }, 2000);

   function go(title){
      res.render('index', {title: title});
   };
});

module.exports = router;
