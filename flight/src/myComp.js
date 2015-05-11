define([
    'flight/lib/component'
], function(defineComponent){
    return defineComponent(myComp);

    function myComp(){
        this.defaultAttrs({
            msgSelector: '.myMsg'
        });

        this.onNewMsg = function(event, data){
            this.select('msgSelector').text(data.msg);
        };

        this.after('initialize', function(){
            this.on('newMsg', this.onNewMsg);
        });
    }
});
