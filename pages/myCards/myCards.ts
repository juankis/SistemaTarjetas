import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { PublicacionPage } from '../publicacion/publicacion';
import { SysCardsService } from '../services/SysCards.service';

@Component({
  selector: 'page-MyCards',
  templateUrl: 'MyCards.html',
  providers: [SysCardsService],
})
export class MyCardsPage {
	items = [];
	userId = 1;
  constructor(public nav: NavController, public _SysCardsService: SysCardsService) {

    this.getMyCards(this.userId);
  }

  getMyCards(userId){
    this._SysCardsService.getMyCards(userId).subscribe(
      data => {
        this.items = data.json();
      },
      err => console.error('error: '+err),
      () => console.log('get my cards completed')
    );
  }

  openNavDetailsPage(item) {
    this.nav.push(PublicacionPage, { item: item });
  }

}
