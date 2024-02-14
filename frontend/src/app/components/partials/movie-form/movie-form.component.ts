import { Component, Inject } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Film } from 'src/app/shared/models/filmek';


@Component({
  selector: 'app-movie-form',
  templateUrl: './movie-form.component.html',
  styleUrls: ['./movie-form.component.css']
})
export class MovieFormComponent {

  constructor(
    public dialogRef: MatDialogRef<MovieFormComponent>,
    @Inject(MAT_DIALOG_DATA) public film: Film
  ) {}

  onCancelClick(): void {
    this.dialogRef.close();
  }

  onSaveClick(updatedFilm: Film): void {
    // Útvonal levágása képről. Első próbálkozásra beleírta a teljes routet, ami... hát nemjó:
    updatedFilm.imageUrl = updatedFilm.imageUrl.split('storage/')[1];
    
    this.dialogRef.close(updatedFilm);
  }
}

