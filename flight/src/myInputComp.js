define([
    'flight/lib/component'
], function(defineComponent){
    return defineComponent(myInputComp);

    function myInputComp(){
        this.defaultAttrs({
            inputSelector: '.myInput'
        });

        this.onKeyPress = function(event){
            if (event.keyCode === 13) {
                this.trigger('newMsg', {
                    msg: this.select('inputSelector').val()
                });
            }
        };

        this.after('initialize', function(){
            this.select('inputSelector').on('keypress', $.proxy(this.onKeyPress, this));
        });
    }
});
