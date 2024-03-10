import { Component } from '@angular/core';

@Component({
  selector: 'app-useroptions',
  templateUrl: './useroptions.component.html',
  styleUrls: ['./useroptions.component.css']
})
export class UseroptionsComponent {
  user = {
    email: '',
    username: '',
    password: ''
  };
  imageUrl: string | ArrayBuffer | null = null;

  constructor() { }

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
    // Implement saving changes logic here
    console.log('Changes saved:', this.user);
  }
}
