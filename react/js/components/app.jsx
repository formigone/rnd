const React = require('react');
const UserActions = require('../actions/UserActions');
const UserStore = require('../stores/UserStore');
const UserConstants = require('../constants/UserContants');

const CardHolder = require('./card-holder');
const FollowingDeck = require('./following-deck');

const App = React.createClass({
    getInitialState: function(){
        return {
            users: []
        };
    },
    componentWillMount: function(){
        UserStore.on(UserConstants.DID_FETCH, this.onUserDidFetch);
        UserActions.fetch();
    },
    componentWillUnmount: function(){
        UserStore.removeListener(UserConstants.DID_FETCH, this.onUserDidFetch);
    },
    onUserDidFetch: function(){
        const users = UserStore.getUsers().map(user => {
            user.following = Math.random() > 0.8;
            return user;
        });
        this.setState({users: users});
    },
    render: function () {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-xs-12 col-sm-9">
                        <div className="jumbotron imgBg"></div>
                        <CardHolder users={this.state.users}/>
                    </div>

                    <div className="col-xs-6 col-sm-3 sidebar-offcanvas">
                        <FollowingDeck users={this.state.users} />
                    </div>
                </div>

                <hr />

                <footer>
                    <p>&copy; Easy Learn Tutorial 2015</p>
                </footer>

            </div>
        );
    }
});

module.exports = App;
