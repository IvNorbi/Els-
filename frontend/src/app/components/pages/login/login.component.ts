import { Component } from '@angular/core';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {

  public user: UserModel = {
    email: "admin@example.com",
    password: "password"
  };

  constructor(public service: UserService) {}

  login() {
    this.service.login(this.user).subscribe(response => {
      if (response.success) {
        this.service.getLoggedInUser().subscribe(user => {
          this.user = user;
        });
      }
    });
  }

  logout() {
    this.service.logout(this.user);
  }
}
