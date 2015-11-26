const Redux = require('redux');

const data = {
    counter: 0
};
const inc = document.createElement('button');
const dec = document.createElement('button');
const display = document.createElement('p');

const store = Redux.createStore(reducer);
store.subscribe(render);

function reducer(state, action) {
    if (typeof state === 'undefined') {
        return data;
    }

    switch(action.type){
        case 'inc':
            state.counter += 1;
            break;
        case 'dec':
            state.counter -= 1;
            break;
    }

    return state;
}

function render(state) {
    if (typeof state === 'undefined') {
        state = store.getState();
    }

    display.textContent = state.counter;
}

setTimeout(_ => {
    const container = document.body;

    inc.textContent = '+';
    dec.textContent = '-';
    display.textContent = '';

    container.appendChild(display);
    container.appendChild(dec);
    container.appendChild(inc);

    inc.addEventListener('click', _ => { store.dispatch({type: 'inc'}) });
    dec.addEventListener('click', _ => { store.dispatch({type: 'dec'}) });
    render(data);
}, 0);
