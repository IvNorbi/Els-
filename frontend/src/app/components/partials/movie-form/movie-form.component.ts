import { Component, Inject } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Film } from 'src/app/shared/models/filmek';


@Component({
  selector: 'app-movie-form',
  templateUrl: './movie-form.component.html',
  styleUrls: ['./movie-form.component.css']
})
export class MovieFormComponent {
  tempFilm: Film;

  constructor(
    public dialogRef: MatDialogRef<MovieFormComponent>,
    @Inject(MAT_DIALOG_DATA) public film: Film
  ) {
    this.tempFilm = {...film};
  }

  onCancelClick(): void {
    this.dialogRef.close();
  }

  onSaveClick(): void {
  
    this.film.name = this.tempFilm.name;
    this.film.description = this.tempFilm.description;

    // Útvonal levágása képről. Első próbálkozásra beleírta a teljes routet, ami... hát nemjó:
    this.film.imageUrl = this.film.imageUrl.split('storage/')[1];

    this.dialogRef.close(this.film);
  }
}
