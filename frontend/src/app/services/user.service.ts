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

  private apiUrl = 'http://localhost:5100/api/users'; // Az API végpont URL-je


  login(user: UserModel) {
    return this.http.post<any>(USER_URL + "login", user).subscribe(
      (answer: any) => {
        if (answer.accessToken && answer.accessToken.token) {
          sessionStorage.setItem("token", answer.accessToken.token);
          sessionStorage.setItem("abilities", JSON.stringify(answer.accessToken.abilities));
        } else if (answer.plainTextToken && answer.plainTextToken !== "") {
          sessionStorage.setItem("token", answer.plainTextToken);
          if (answer.accessToken && answer.accessToken.abilities) {
            sessionStorage.setItem("abilities", JSON.stringify(answer.accessToken.abilities));
          } else {
            sessionStorage.setItem("abilities", JSON.stringify(answer.abilities));
          }
        }
      }
    );
  }
  
  getUsers(): Observable<any[]> {
    return this.http.get<any[]>(this.apiUrl);
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

  getCookie(name:string) {
    function escape(s:any) { return s.replace(/([.*+?\^$(){}|\[\]\/\\])/g, '\\$1'); }
    var match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(name) + '=([^;]*)'));
    return match ? match[1] : null;
}

 hasAbilities(ability:string) {
   let abilities = sessionStorage.getItem("abilities")||"";
   return (abilities.indexOf(ability) >= 0);
 }
}

