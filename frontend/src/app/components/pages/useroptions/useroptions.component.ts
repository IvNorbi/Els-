import { Component, OnInit } from "@angular/core";
import { UserService } from "src/app/services/user.service";

@Component({
  selector: 'app-useroptions',
  templateUrl: './useroptions.component.html',
  styleUrls: ['./useroptions.component.css']
})
export class UseroptionsComponent implements OnInit {
  user = {
    email: '',
    name: '',
    password: ''
  };
  imageUrl: string | ArrayBuffer | null = null;

  constructor(private userService: UserService) { }

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
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = () => {
        this.imageUrl = reader.result;
      };
    }
  }

  saveChanges() {
    console.log('Változtatások mentve: ', this.user);
  }
}