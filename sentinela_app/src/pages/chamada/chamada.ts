import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import { Camera, CameraOptions } from '@ionic-native/camera';
import { Observable } from 'rxjs';
import 'rxjs/add/operator/map';

@Component({
  selector: 'page-chamada',
  templateUrl: 'chamada.html'
})
export class ChamadaPage {

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

  cadastrar() {
    if(this.data.photo != ""){
      this.servidor = localStorage.getItem('ip_servidor');
      let url = 'http://'+this.servidor+'/sentinela/public/api/chamada'
      this.http.post(url, this.data)
      .map(res => res.json())
      .subscribe(
        res => {
          this.data.photo = "";
        },
        error => {

        }
      );
    }
  }

  foto() {
    this.camera.getPicture(this.options).then((imageData) => {
      let base64Image = 'data:image/jpeg;base64,' + imageData;
      this.data.photo = base64Image;
     }, (err) => {
        console.log(err)
     });
  }

}
