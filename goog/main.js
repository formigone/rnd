goog.provide('rokko.main');


goog.require('goog.dom');
goog.require('rokko.person');
goog.require('rokko.cute');


rokko.main = function() {
    var me = new rokko.Person('Rodrigo', 23);
    var el = goog.dom.createDom('h1', {}, me.toString());
    var card = rokko.cute.card({title: 'My soy card!'});

    goog.dom.appendChild(document.body, el);

    el = goog.dom.createDom('div');
    goog.dom.getElement(el).innerHTML = card;
    goog.dom.appendChild(document.body, el);
}

goog.exportSymbol('rokko.main', rokko.main);
