import { Component, OnInit } from "@angular/core";
import { UserService } from "src/app/services/user.service";
import { UserModel } from "src/app/shared/models/userModel";

@Component({
  selector: 'app-useroptions',
  templateUrl: './useroptions.component.html',
  styleUrls: ['./useroptions.component.css']
})
export class UseroptionsComponent implements OnInit {
  user:UserModel= {
    email: '',
    name: '',
    password: '',
    imageUrl:"",
  };
  

  constructor(public userService: UserService) { }

  ngOnInit() {
    this.loadLoggedInUserData();
  }

  loadLoggedInUserData() {
    this.userService.getLoggedInUser().subscribe(
      (userData: any) => {
        this.user = userData; // Felhasználói adatok betöltése
      },
      (error: any) => {
        console.error('Hiba történt a felhasználó adatainak betöltése közben:', error);
      }
    );
  }

  onFileSelected(event: any) {
    const file = event.target.files[0];
    if (file) {
        this.user.image = file;
        this.user.imageUrl = URL.createObjectURL(file);
    }
  }

  saveChanges() {
    this.userService.modifyUser(this.user).subscribe();
  }
}