const seq = require('../util/SeqGen');

const UserConstants = function(){
    this.FETCH = seq.nextStr();
    this.WILL_FETCH = seq.nextStr();
    this.DID_FETCH = seq.nextStr();

    this.FOLLOW = seq.nextStr();
    this.WILL_FOLLOW = seq.nextStr();
    this.DID_FOLLOW = seq.nextStr();

    this.UNFOLLOW = seq.nextStr();
    this.WILL_UNFOLLOW = seq.nextStr();
    this.DID_UNFOLLOW = seq.nextStr();
};

module.exports = new UserConstants();
