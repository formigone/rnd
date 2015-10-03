const Dispatcher = require('./../dispatcher/Dispatcher');
const EventEmitter = require('events');
const util = require('util');

const UserConstants = require('../constants/UserContants');

let users = [];

function UserStore() {
    EventEmitter.call(this);

    Dispatcher.register(payload => {
        switch (payload.type) {
            case UserConstants.FETCH:
                this.emit(UserConstants.WILL_FETCH);

                $.get('/random-users.json')
                    .then(res => {
                        users = res;
                        this.emit(UserConstants.DID_FETCH);
                    });
                break;
        }
    });

    this.getUsers = _ => users;
}

util.inherits(UserStore, EventEmitter);

module.exports = new UserStore();
