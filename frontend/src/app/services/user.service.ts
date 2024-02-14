import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { UserModel } from '../shared/models/userModel';
import { Observable, map } from 'rxjs';
import {USER_URL} from '../shared/contsants/urls';



@Injectable({
  providedIn: 'root'
})
export class UserService {



  constructor(private http:HttpClient) { }

  login(user:UserModel) {
    return this.http.post<string>(USER_URL+"login", user)
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
  
    this.http.post<boolean>(USER_URL+"logout", "", 
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

