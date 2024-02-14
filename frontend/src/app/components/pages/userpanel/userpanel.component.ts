import { Component, Input } from '@angular/core';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';

@Component({
  selector: 'app-userpanel',
  templateUrl: './userpanel.component.html',
  styleUrls: ['./userpanel.component.css']
})
export class UserpanelComponent {

  constructor (public service:UserService) {

  }
  
}