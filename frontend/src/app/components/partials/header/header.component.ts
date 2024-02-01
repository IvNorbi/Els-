import { Component } from '@angular/core';

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
}
