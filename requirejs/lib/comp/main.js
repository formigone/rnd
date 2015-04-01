define(['comp'], function(){
    var Comp = function(name){
        this.name = name;
    };

    Comp.prototype.toJson = function(){
        return JSON.stringify(this);
    };

    return Comp;
});
