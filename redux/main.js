const app = {
    getDefState(){
        return {
            counter: 0
        };
    },
    inc: document.createElement('button'),
    dec: document.createElement('button'),
    display: document.createElement('p'),
    init(container){
        this.inc.textContent = '+';
        this.dec.textContent = '-';
        this.display.textContent = '';

        container.appendChild(this.display);
        container.appendChild(this.dec);
        container.appendChild(this.inc);

        this.inc.addEventListener('click', this.handleClick.bind(this, this.constants.inc));
        this.dec.addEventListener('click', this.handleClick.bind(this, this.constants.dec));

        this.data = this.getDefState();
    },
    constants: {
        inc: 0,
        dec: 1
    },
    handleClick(action){
        this.data = this.reducer(this.data, action);
        this.render();
    },
    reducer(state, action){
        const data = typeof state === 'undefined' ? this.getDefState() : state;
        switch(action){
            case this.constants.inc:
                this.data.counter += 1;
                break;
            case this.constants.dec:
                this.data.counter -= 1;
                break;
        }

        return data;
    },
    render(){
        this.display.textContent = this.data.counter;
    }
};

setTimeout(_ => {
    app.init(document.body);
    app.render();
}, 0);
