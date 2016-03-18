var mongoose = require('mongoose');
mongoose.connect('mongodb://127.0.0.1:27017/explorr');

var db = mongoose.connection;

db.on('error', function(err){
   console.log(err);
});

db.on('open', function(){
   var personSchema = mongoose.Schema({
      id: Number,
      username: String
   });

   var Person = mongoose.model('Person', personSchema);
   var me = new Person({
      username: 'rformigone'
   });

   me.save(function(err, me){
      if (err) throw err;

      console.log('me > saved', me);
   });
   console.log(me);
});
