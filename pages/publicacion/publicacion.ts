import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

/*
  Generated class for the Publicacion page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-publicacion',
  templateUrl: 'publicacion.html'
})
export class PublicacionPage {
	public item;
  constructor(public navCtrl: NavController,
  				public navParams: NavParams) {
  	this.item = navParams.get('item');
  }
  ionViewDidLoad() {
    console.log('Hello PublicacionPage Page');
  }

}
