let seq = 0;

function SeqGen() {
    this.next = _ => ++seq;
    this.nextStr = _ => this.next() + '_';
}

module.exports = new SeqGen();
