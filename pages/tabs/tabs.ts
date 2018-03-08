import { Component } from '@angular/core';

import { HomePage } from '../home/home';
import { SendPage } from '../send/send';
import { MyCardsPage } from '../myCards/myCards';

@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {
  // this tells the tabs component which Pages
  // should be each tab's root Page
  tab1Root: any = HomePage;
  tab2Root: any = SendPage;
  tab3Root: any = MyCardsPage;

  constructor() {

  }
}
