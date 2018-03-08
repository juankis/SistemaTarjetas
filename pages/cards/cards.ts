import { Component } from '@angular/core';

import { NavController, NavParams } from 'ionic-angular';
import { PublicacionPage } from '../publicacion/publicacion';

@Component({
  selector: 'page-cards',
  templateUrl: 'cards.html'
})
export class CardsPage {
	items = [];
  constructor(public nav: NavController) {
  	this.items = [
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta1.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Daniel Castillo',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta4.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Juan Carlos Ojeda',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta2.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Jon Stark',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta3.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Jaime Lanister',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta4.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Daniel Castillo',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta1.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Diego Rios',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta2.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Daniel Castillo',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta3.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Daniel Castillo',	
		'fecha':'01-Dic-2016'
      },
      {
        'title': 'Compromiso',
        'pathImagenTarjeta': 'img/tarjeta4.jpg',
        'description': 'Muchas gracias por tu compromiso en el Proyecto Mex, y tu apoyo al equipo MDH',
        'destinatario': 'Fererico Seckel',
		'remitente': 'Daniel Castillo',   
		'fecha':'01-Dic-2016'
		},
    ]		
  }

  openNavDetailsPage(item) {
    this.nav.push(PublicacionPage, { item: item });
  }
}
