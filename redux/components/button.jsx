const React = require('react');

const store = require('../store');

const Button = React.createClass({
    getDefaultProps: function(){
        return {
            onClick: null
        }
    },
    onClick: function(){
        if (this.props.onClick) {
            store.dispatch({type: this.props.onClick});
        }
    },
    render: function () {
        return (
            <button onClick={this.onClick}>{this.props.children}</button>
        );
    }
});

module.exports = Button;
