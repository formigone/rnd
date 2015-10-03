const AppDispatcher = require('../dispatcher/Dispatcher');
const UserConstants = require('../constants/UserContants');

const UserActions = {
    fetch: function(){
        AppDispatcher.dispatch({
            type: UserConstants.FETCH
        });

        return this;
    }
};

module.exports = UserActions;
