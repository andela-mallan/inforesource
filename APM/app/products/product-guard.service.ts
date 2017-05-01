import { Injectable } from '@angular/core';
import { CanActivate, Router, ActivatedRouteSnapshot } from '@angular/router';

@Injectable()
export class ProductDetailGuard implements CanActivate {

  constructor(private _router: Router)

  canActivate(route: ActivatedRouteSnapshot): boolean {
    let id = +route.url[1].path;  // the url index 1 reps the id param

    if(isNaN(id) || id<1){
      alert('Invalid Product Id');
      // redirect to the products page
      this._router.navigate(['/products']);
      // abort current navigation
      return false;
    };
    return true;
  }
}
