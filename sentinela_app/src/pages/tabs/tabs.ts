import { Component } from '@angular/core';

import { ChamadaPage } from '../chamada/chamada';
import { CadastroPage } from '../cadastro/cadastro';
import { IpPage } from '../ip/ip';

@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {

  tab1Root = CadastroPage;
  tab2Root = ChamadaPage;
  tab3Root = IpPage;


  constructor() {

  }
}
