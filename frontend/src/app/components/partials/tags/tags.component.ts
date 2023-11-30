import { Component } from '@angular/core';
import { FilmekService } from 'src/app/services/filmek.service';
import { Tag } from 'src/app/shared/models/Tag';

@Component({
  selector: 'app-tags',
  templateUrl: './tags.component.html',
  styleUrls: ['./tags.component.css']
})
export class TagsComponent {
  tags?:Tag[];
  constructor(filmService:FilmekService) {
    filmService.getAllTags().subscribe(serverTags => {
      this.tags = serverTags;
    });
  }

}
