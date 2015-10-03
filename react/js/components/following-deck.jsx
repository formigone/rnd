const React = require('react');

const FollowingDeck = React.createClass({
    render: function () {
        return (
            <div className="list-group">
                <a href="#" className="list-group-item active">Following <span className="badge">23</span></a>
                <a href="#" className="list-group-item">Name</a>
            </div>
        );
    }
});

module.exports = FollowingDeck;
