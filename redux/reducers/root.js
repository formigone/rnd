const actions = require('../actions');
const appState = require('./appData');

function rootReducer(state, action) {
    console.log('state', state, action);
    console.log('>> ', state);
    switch(action.type){
        case actions.INC:
            state.counter += state.incMultiplier;
            state.total += 1;
            break;
        case actions.DEC:
            state.counter += state.decMultiplier;
            state.total += 1;
            break;
        default:
            return appState;
    }

    if (state.counter < 0) {
        state.mood = 'red';
    } else if (state.counter > 5) {
        state.mood = 'green';
    } else {
        state.mood = 'black';
    }
console.log('<< ', state);
    return state;
}

module.exports = rootReducer;
