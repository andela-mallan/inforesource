import { Component } from '@angular/core';

@Component({
    selector: 'pm-app',
    template: `
        <h1>{{ pageTitle }}</h1>
        <pm-products></pm-products>
    `
})
export class AppComponent {
  pageTitle: string = 'Acme Product Management';
}
