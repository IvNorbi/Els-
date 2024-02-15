import { Component, Input } from '@angular/core';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {
  
  //Hamburger ikon megjelenítés.
  userPanelOpen = false;
  toggleUserPanel() {
    this.userPanelOpen = !this.userPanelOpen;
  }

  constructor (public service:UserService) {

  }
}
