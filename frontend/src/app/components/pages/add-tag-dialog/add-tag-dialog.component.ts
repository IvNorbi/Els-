import { Component, Inject, OnInit } from '@angular/core';
import { MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Film } from 'src/app/shared/models/filmek';
import { Tag } from 'src/app/shared/models/Tag';

@Component({
  selector: 'app-add-tag-dialog',
  templateUrl: './add-tag-dialog.component.html',
  styleUrls: ['./add-tag-dialog.component.css']
})
export class AddTagDialogComponent implements OnInit {
  film: Film;
  tags: Tag[] = [];
  selectedTag: Tag | null = null;

  constructor(@Inject(MAT_DIALOG_DATA) public data: { film: Film }) {
    this.film = data.film;
  }

  ngOnInit(): void {
    if (this.film && this.film.tags) {
      this.tags = this.film.tags;
    }
  }

  onTagSelected(tag: Tag): void {
    this.selectedTag = tag;
  }
}
