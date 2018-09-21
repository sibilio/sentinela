import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { FotoPage } from '../foto/foto';

@Component({
  selector: 'page-cadastro',
  templateUrl: 'cadastro.html'
})
export class CadastroPage {

  constructor(public navCtrl: NavController) {

  }

  iniciarCadastro(){
    console.log("clicou");
    this.navCtrl.push(FotoPage);
  }

}
