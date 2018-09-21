import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import { Camera, CameraOptions } from '@ionic-native/camera';
import { Observable } from 'rxjs';
import 'rxjs/add/operator/map';

/**
 * Generated class for the FotoPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-foto',
  templateUrl: 'foto.html',
})
export class FotoPage {

  public data = {
    name: "",
    photo: ""
  };
  private servidor: string = "";
  public options: CameraOptions = {
    quality: 100,
    destinationType: this.camera.DestinationType.DATA_URL,
    encodingType: this.camera.EncodingType.JPEG,
    mediaType: this.camera.MediaType.PICTURE
  }

  constructor(public navCtrl: NavController, public navParams: NavParams,
              public http: Http, private camera: Camera) {
    this.servidor = localStorage.getItem('ip_servidor');
  }

  cancelar() {
    this.navCtrl.pop();
  }

  cadastrar() {
    this.servidor = localStorage.getItem('ip_servidor');
    if(this.data.photo != '' && this.data.name != ''){
      let url = 'http://'+this.servidor+'/sentinela/public/api/aluno/create';
      this.http.post(url, this.data)
      .map(res => res.json())
      .subscribe(
        res => {
          this.data.name = "";
          this.data.photo = "";
        },
        error => {

        }
      );
    }
  }

  foto() {
    console.log("clicou na foto");
    this.camera.getPicture(this.options).then((imageData) => {
      let base64Image = 'data:image/jpeg;base64,' + imageData;
      this.data.photo = base64Image;
     }, (err) => {
        console.log(err)
     });
  }
}
