goog.provide('rokko.person');

/**
 *
 * @param {string} name
 * @param {number} age
 * @constructor
 */
rokko.Person = function(name, age){
    this.name = name;
    this.age = age;
};

/**
 *
 * @returns {string}
 */
rokko.Person.prototype.toString = function(){
    return 'My name is ' + this.name + ' >> ' + this.age;
};
