module DDM {
    export class Point2D {
        x: number;
        y: number;

        constructor (x: number, y: number){
            this.x = x;
            this.y = y;
        }

        moveTo (x: number, y: number){
            this.x = x;
            this.y = y;
        }

        moveBy(dist: number){
            this.x += dist;
            this.y += dist;
        }

        toString(){
            return '(' + this.x + ', ' + this.y + ')';
        }
    }
}

var p = new DDM.Point2D(3, 4);
console.log(p);

(function(){
    setTimeout(function(){
        p.moveBy(23);
        console.log(p);
    }, 100);
}());
