import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';

@Component({
  selector: 'page-ip',
  templateUrl: 'ip.html'
})
export class IpPage {

  public ip: string = "";

  constructor(public navCtrl: NavController) {
    this.ip = localStorage.getItem("ip_servidor");
  }

  salvar(){
    localStorage.setItem("ip_servidor", this.ip);
  }

}
