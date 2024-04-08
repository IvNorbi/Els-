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
  isSuccess: boolean | undefined; 

  constructor(
    @Inject(MAT_DIALOG_DATA) public data: { film: Film },
    private dialogRef: MatDialogRef<AddTagDialogComponent>,
    private addTagService: FilmekService
  ) {
    this.film = data.film;
  }

  ngOnInit(): void {
    this.getAllTags();
  }

  getAllTags(): void {
    this.addTagService.getAllTags().subscribe(
      (tags: Tag[]) => {
        this.tags = tags.map(tag => tag.name);
      },
      error => {
        console.error('Hiba történt a címkék lekérése közben:', error);
      }
    );
  }

  addTag(): void {
    if (!this.selectedTag) return;

    const movieId: number = parseInt(this.film.id);
    this.addTagService.addTagToMovie(movieId, this.selectedTag).subscribe(
      response => {
        console.log('Címke sikeresen hozzáadva:', response);
        this.selectedTag = '';
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
