import {Injectable} from '@angular/core';
import {Http, Headers, RequestOptions, URLSearchParams} from '@angular/http';
import 'rxjs/Rx';
 import {Observable} from 'rxjs/Observable';


@Injectable()
export class SysCardsService{

  constructor(private _http: Http){
    console.log("SysCardsService Service Ready............");

  }

  getPublications(){
    return this._http.get('http://localhost:8000/publications');
  }

  getMyCards(userId){
    let params: URLSearchParams = new URLSearchParams();
    params.set('userId', userId);
    return this._http.get('http://localhost:8000/publications', {search:params});
  }

  getUsers(){
    return this._http.get('http://localhost:8000/users');
  }

  getCards(){
    return this._http.get('http://localhost:8000/cards');
  }

  savePublication(publicacion){
    let params: URLSearchParams = new URLSearchParams();
    
    params.set('description', publicacion.description);
    params.set('sender_id', publicacion.sender_id);
    params.set('receptor_id', publicacion.receptor_id);
    params.set('card_id', publicacion.card_id);
    
    return this._http.get('http://localhost:8000/publications/nuevo', {search:params});

    /*
    let headers = new Headers({ 'Content-Type': 'application/json' });
    let options = new RequestOptions({ headers: headers });
    return this.http.post(this.heroesUrl, { name }, options)
             .toPromise()
             .then(this.extractData)
             .catch(this.handleError);

    /*
    var headers = new Headers();
    headers.append('Content-type','application/json');
    return this._http.post('http://localhost:8000/publications/nuevo', JSON.stringify(todo),{headers:headers});
    */
  }
  
 

}