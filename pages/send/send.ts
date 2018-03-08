import { Component, ViewChild } from '@angular/core';
import { NavController, Slides, LoadingController } from 'ionic-angular';
import { SysCardsService } from '../services/SysCards.service';
import { HomePage } from '../home/home';

@Component({
  selector: 'page-send',
  templateUrl: 'send.html',
  providers: [SysCardsService],
})
export class SendPage {
	items = [];
  cards = [];
	description: any;
  @ViewChild(Slides) slides: Slides;

	senderId: any  = 1;
	receptorId: any;
	publication: any;
  cardId: any;
  loading: any;

  constructor(public navCtrl: NavController, public _SysCardsService: SysCardsService, public loadingCtrl: LoadingController) {
  	this.loadUsers();	
    this.loadCards();  
    /*his.loading = this.loadingCtrl.create({
      content: 'cargando',
      duration: 5000
    });
    */
  loadCards(){
    //this.loadLoading('cargando', 1000);
    //loading.present();
    this._SysCardsService.getCards().subscribe(
      data => {
        this.cards = data.json();
      },
      err => console.error('error: '+err),
      () =>{
        console.log('get cards completed');
        //loading.dismiss();
      } 
    );
  }

  loadUsers(){
    //this.loadLoading('cargando', 1000);
    //loading.present();
    this._SysCardsService.getUsers().subscribe(
      data => {
        this.items = data.json();
      },
      err => console.error('error: '+err),
      () => {
        console.log('get users completed');
        //loading.dismiss();
      } 
    );
  }

  newPublication() {
    //this.loadLoading('cargando', 1000);
    //loading.present();
    var publication = {
      description: this.description,
      sender_id: this.senderId,
      receptor_id: this.receptorId,
      card_id: this.cards[this.slides.getActiveIndex()].id
    };

    this._SysCardsService.savePublication(publication).subscribe(
   
      data => {
        console.log("Res = " + JSON.stringify(data));
      },
      err => console.error('error: '+err),
      () =>{
        console.log('set publication completed');
        //loading.dismiss();
        this.navCtrl.setRoot(HomePage);
      } 
    );
  }

   loadLoading(mensaje, time){
    let loading = this.loadingCtrl.create({
      content: mensaje,
      duration: time
    });
  }

}
