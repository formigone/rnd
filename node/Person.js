var Person = function(name) {
    this.name = name;
};

Person.prototype.greet = function(msg) {
    return msg + ', ' + this.name;
};

exports.Person = {
    create: function(name) {
        return new Person(name);
    },
    num: 23
};
