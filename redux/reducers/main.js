const combineReducers = require('redux').combineReducers;

const rootReducer = require('./root');

const reducer = combineReducers({
    rootReducer
});

module.exports = rootReducer;
