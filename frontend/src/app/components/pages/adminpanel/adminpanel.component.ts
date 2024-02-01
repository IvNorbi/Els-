import { Component } from '@angular/core';

@Component({
  selector: 'app-adminpanel',
  templateUrl: './adminpanel.component.html',
  styleUrls: ['./adminpanel.component.css']
})
export class AdminpanelComponent {
  items = [
    { image: 'path/to/image1.jpg', name: 'Film' },
    { image: 'path/to/image2.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },
    { image: 'path/to/image3.jpg', name: 'Film' },

    // további elemek...
  ];

  deleteItem(item: any) {
    // Törlés logika
  }

  editItem(item: any) {
    // Módosítás logika
  }
}
