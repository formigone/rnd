const Redux = require('redux');
const reducer = require('./reducers/main');

const store = Redux.createStore(reducer);

module.exports = store;
