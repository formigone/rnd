const React = require('react');

const Display = React.createClass({
    getDefaultProps: function(){
        return {
            counter: 0,
            mood: 'black'
        }
    },
    render: function () {
        return (
            <h1 style={{color: this.props.mood}}>{this.props.counter}</h1>
        );
    }
});

module.exports = Display;
