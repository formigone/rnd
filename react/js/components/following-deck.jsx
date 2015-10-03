const React = require('react');

const FollowingDeck = React.createClass({
    getDefaultProps: function(){
        return {
            users: []
        }
    },
    render: function () {
        const followees = this.props.users
            .filter(user => user.following)
            .map(user => <a href="#" className="list-group-item">@{user.username}</a>)
        return (
            <div className="list-group stickySidebar">
                <a href="#" className="list-group-item active">Following <span className="badge">{followees.length}</span></a>
                {followees}
            </div>
        );
    }
});

module.exports = FollowingDeck;
