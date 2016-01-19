const React = require('react');

const Display = require('./display');
const Summary = require('./summary');
const Button = require('./button');

const actions = require('../actions');
const appState = require('../reducers/appData');

const store = require('../store');

const MyApp = React.createClass({
    getInitialState: function(){
        return appState;
    },
    componentWillMount: function(){
        store.subscribe(_ => {
            console.log('############', store.getState());
            this.setState(store.getState());
        });
    },
    render: function () {
        const state = this.state;
console.log('# # # # # #', state);
        return (
            <div>
                <Display counter={state.counter} mood={state.mood}/>
                <Button onClick={actions.DEC}>-</Button>
                <Button onClick={actions.INC}>+</Button>
                <Summary total={state.total}/>
            </div>
        );
    }
});

module.exports = MyApp;
