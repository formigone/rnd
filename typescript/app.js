var DDM;
(function (DDM) {
    var Point2D = (function () {
        function Point2D(x, y) {
            this.x = x;
            this.y = y;
        }
        Point2D.prototype.moveTo = function (x, y) {
            this.x = x;
            this.y = y;
        };
        Point2D.prototype.moveBy = function (dist) {
            this.x += dist;
            this.y += dist;
        };
        Point2D.prototype.toString = function () {
            return '(' + this.x + ', ' + this.y + ')';
        };
        return Point2D;
    })();
    DDM.Point2D = Point2D;
})(DDM || (DDM = {}));
var p = new DDM.Point2D(3, 4);
console.log(p);
(function () {
    setTimeout(function () {
        p.moveBy(23);
        console.log(p);
    }, 100);
}());
//# sourceMappingURL=app.js.map