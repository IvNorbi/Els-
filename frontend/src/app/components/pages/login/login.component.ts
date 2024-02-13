import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {

  public user:UserModel = {
    email :"admin@example.com",
    password :"password"
  };

  constructor (public service:UserService) {

  }

  login() {
    this.service.login(this.user);
  }

  logout() {
    this.service.logout(this.user);
  }

}


