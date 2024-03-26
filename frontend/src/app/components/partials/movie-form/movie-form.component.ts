import { Component, Inject } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';


@Component({
  selector: 'app-movie-form',
  templateUrl: './movie-form.component.html',
  styleUrls: ['./movie-form.component.css']
})
export class MovieFormComponent {
  selectedFile: File | null = null;

  constructor(
    public dialogRef: MatDialogRef<MovieFormComponent>,
    @Inject(MAT_DIALOG_DATA) public film: Film,
    private imageUploadService: FilmekService
  ) {}

  onCancelClick(): void {
    this.dialogRef.close();
  }

  //KÉP FELTÖLTÉSE  --- > MÉG NEM MEGY
  onSaveClick(): void {
    if (this.selectedFile) {
      this.imageUploadService.uploadImage(this.selectedFile).subscribe(response => {
        this.film.imageUrl = response.imageUrl;
        this.dialogRef.close(this.film);
      });
    } else {
      this.dialogRef.close(this.film);
    }
  }

  onFileSelected(event: any): void {
    this.selectedFile = event.target.files[0] as File;
  }
}