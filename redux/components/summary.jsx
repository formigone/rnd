const React = require('react');

const Summary = React.createClass({
    getDefaultProps: function(){
        return {
            total: 0
        }
    },
    render: function () {
        return (
            <p>Total actions: {this.props.total}</p>
        );
    }
});

module.exports = Summary;
