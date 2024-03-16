import { Component } from '@angular/core';
import { UserModel } from 'src/app/shared/models/userModel';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-reg',
  templateUrl: './reg.component.html',
  styleUrls: ['./reg.component.css']
})
export class RegComponent {
  user: UserModel = new UserModel();
  isRegistered: boolean = false;

  constructor(private registrationService: UserService) { }

  onSubmit() {
    this.registrationService.register(this.user)
      .subscribe(
        (response: any) => {
          console.log('Regisztráció sikeres!', response);
          this.isRegistered = true; 
          // További dolgok itt lehetnek
        },
        (error: any) => {
          console.error('Hiba történt a regisztráció során:', error);
          //Hibaüzenet(ek) konzolra.
        }
      );
  }
}