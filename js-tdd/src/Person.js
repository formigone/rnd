var Person = function(firstName, lastName){
   this.firstName = firstName;
   this.lastName = lastName;
};

Person.prototype = {
   getName: function(){
      return this.firstName + ' ' + this.lastName;
   }
};

