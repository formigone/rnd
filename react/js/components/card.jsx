const React = require('react');

const Card = React.createClass({
    getDefaultProps: function(){
        return {
            name: null,
            img: null
        };
    },
    render: function () {
        return (
            <div className="card">
                <img src={this.props.img} className="img-responsive"/>

                <h2>{this.props.name}</h2>
                <button className="btn btn-primary">Follow</button>
            </div>
        );
    }
});

module.exports = Card;
