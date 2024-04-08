import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { UserModel } from '../shared/models/userModel';
import { Observable, catchError, map, of } from 'rxjs';
import {REG_URL, USERS_URL, USERS_URL2, USER_URL} from '../shared/contsants/urls';
import { Router } from '@angular/router';





@Injectable({
  providedIn: 'root'
})
export class UserService {

  private users: UserModel[] = [];


  constructor(private http:HttpClient , private router: Router) { }

  login(user: UserModel): Observable<any> {
    return this.http.post<any>(USER_URL + "login", user).pipe(
      map((answer: any) => {
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
        this.router.navigateByUrl('/').then(() => window.location.reload());
        return answer; // Válasz visszaadása komponensnek.
      })
    );
  }
  
  getUsers(): Observable<any[]> {
    let token = sessionStorage.getItem("token");
    let headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);

    return this.http.get<any[]>(USERS_URL, { headers: headers });
  }

  getLoggedInUser(): Observable<any> {
    let token = sessionStorage.getItem("token");
    let headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.get<any>(USER_URL, { headers: headers });
  }

  getUserNameById(userId: number): Observable<string> {
    const token = sessionStorage.getItem('token');
    if (!token) {
      return of('');
    }
  
    const headers = new HttpHeaders({
      'Authorization': `Bearer ${token}`
    });
  
    return this.http.get<any>(`${USERS_URL2}/${userId}`, { headers }).pipe(
      map((userData: any) => userData.name),
      catchError(() => of(''))
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

  register(user: UserModel): Observable<UserModel> {
    return this.http.post<UserModel>(REG_URL, user);
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

