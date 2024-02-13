import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { UserModel } from '../shared/models/userModel';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  // A MAIN URL-eket kellene használni majd később, de egyenlőre így.
  private url:string = 'http://localhost:5100/api/user/';

  constructor(private http:HttpClient) { }

  login(user:UserModel) {
    return this.http.post<string>(this.url+"login", user)
      .subscribe( 
        (answer:any) => {
          if (answer.token != "")  {
            sessionStorage.setItem("token", answer.token);
            sessionStorage.setItem("abilities", answer.abilities);
          }
        }
      );
  }

  logout(user:UserModel) {
    let token = sessionStorage.getItem("token");
  
    this.http.post<boolean>(this.url+"logout", "", 
    { headers: {
      "Authorization": "Bearer "+token
     }
    }).subscribe();
    sessionStorage.removeItem("token");
    sessionStorage.removeItem("abilities");
  }

  isUserLoggedIn() {
    let token = sessionStorage.getItem("token");
    return token != null && token !== "";
  }
  
}

