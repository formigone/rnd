goog.provide('rokko.main');


goog.require('goog.dom');
goog.require('rokko.person');


rokko.main = function() {
    var me = new rokko.Person('Rodrigo', 23);
    var el = goog.dom.createDom('h1', {}, me.toString());
    goog.dom.appendChild(document.body, el);
}

goog.exportSymbol('rokko.main', rokko.main);
