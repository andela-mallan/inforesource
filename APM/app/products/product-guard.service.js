"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = require("@angular/core");
var ProductDetailGuard = (function () {
    function ProductDetailGuard() {
    }
    ProductDetailGuard.prototype.canActivate = function (route) {
        var id = +route.url[1].path; // the url index 1 reps the id param
        if (isNaN(id) || id < 1) {
            alert('Invalid Product Id');
            // redirect to the products page
            this._router.navigate(['/products']);
            // abort current navigation
            return false;
        }
        ;
        return true;
    };
    return ProductDetailGuard;
}());
ProductDetailGuard = __decorate([
    core_1.Injectable()
], ProductDetailGuard);
exports.ProductDetailGuard = ProductDetailGuard;
//# sourceMappingURL=product-guard.service.js.map