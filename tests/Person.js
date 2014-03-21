var Person = function(name) {
   this.name = name;
};

Person.prototype.greet = function(msg) {
   return msg + " " + this.name + "!";
};

module.exports = Person;
