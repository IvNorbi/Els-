import { Component, OnInit } from '@angular/core';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  userPanelOpen = false;
  currentUser: UserModel | null = null;
  isLoggedIn: boolean = false;

  constructor(public service: UserService) {}

  ngOnInit(): void {
    this.isLoggedIn = this.service.isUserLoggedIn();
    if (this.isLoggedIn) {
      this.service.getLoggedInUser().subscribe(user => {
        this.currentUser = user;
      });
    }
  }

  toggleUserPanel() {
    this.userPanelOpen = !this.userPanelOpen;
    // Frissítsd az isLoggedIn értékét a panel állapota alapján
    this.isLoggedIn = this.service.isUserLoggedIn();
  }

  logout() {
    if (this.currentUser) {
      this.service.logout(this.currentUser);
      this.isLoggedIn = false; // Frissítsd az isLoggedIn értékét a kijelentkezés után
    }
  }
}
