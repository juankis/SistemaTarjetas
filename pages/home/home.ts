import { Component } from '@angular/core';

import { NavController, NavParams } from 'ionic-angular';
import { PublicacionPage } from '../publicacion/publicacion';
import { SysCardsService } from '../services/SysCards.service';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html',
  providers: [SysCardsService],
})
export class HomePage {
	items = [];
  constructor(public nav: NavController, public _SysCardsService: SysCardsService) {

    this.getPublications()
  }

  getPublications(){
    this._SysCardsService.getPublications().subscribe(
      data => {
        this.items = data.json();
      },
      err => console.error('error: '+err),
      () => console.log('get publications completed')
    );
  }

  openNavDetailsPage(item) {
    this.nav.push(PublicacionPage, { item: item });
  }

}
