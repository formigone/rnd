const React = require('react');

const Card = require('./card');

const CardHolder = React.createClass({
    getDefaultProps: function(){
        return {
            users: []
        };
    },
    render: function () {
        const cards = this.props.users.map(user => (
                <div className="col-xs-6 col-lg-4">
                    <Card name={user.username} img={user.img}/>
                </div>)
        );

        return (
            <div className="row">
                {cards}
            </div>
        );
    }
});

module.exports = CardHolder;
