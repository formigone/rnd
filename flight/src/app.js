define([
    'myComp',
    'myInputComp'
], function app(myComp, myInputComp) {
    'use strict';

    return {
        go: function(){
            myComp.attachTo(document);
            myInputComp.attachTo(document);
        }
    }
});
