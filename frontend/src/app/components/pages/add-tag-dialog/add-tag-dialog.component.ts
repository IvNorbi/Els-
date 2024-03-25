import { Component, Inject, OnInit } from '@angular/core';
import { MAT_DIALOG_DATA, MatDialogRef } from '@angular/material/dialog';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';
import { Tag } from 'src/app/shared/models/Tag';

@Component({
  selector: 'app-add-tag-dialog',
  templateUrl: './add-tag-dialog.component.html',
  styleUrls: ['./add-tag-dialog.component.css']
})
export class AddTagDialogComponent implements OnInit {
  film: Film;
  tags: string[] = [];
  selectedTag: string = '';
  newTagName: string = '';
  newTag: string = '';
  isSuccess: boolean | undefined; 

  constructor(
    @Inject(MAT_DIALOG_DATA) public data: { film: Film },
    private dialogRef: MatDialogRef<AddTagDialogComponent>,
    private addTagService: FilmekService
  ) {
    this.film = data.film;
  }

  ngOnInit(): void {
    if (this.film && this.film.tags) {
      this.tags = this.film.tags.map(tag => tag.name);
    }
  }

  onTagSelected(tagName: string): void {
    this.selectedTag = tagName;
  }

  addTag(): void {
    if (this.newTagName.trim() === '') return;

    const movieId: number = parseInt(this.film.id);
    this.addTagService.addTagToMovie(movieId, this.newTagName).subscribe(
      response => {
        console.log('Címke sikeresen hozzáadva:', response);
        this.tags.push(this.newTagName);
        this.selectedTag = this.newTagName;
        this.newTagName = '';
        this.isSuccess = true; 
      },
      error => {
        console.error('Hiba történt a címke hozzáadása közben:', error);
        this.isSuccess = false; 
      }
    );
  }

  closeDialog(): void {
    this.dialogRef.close(); 
  }
}
