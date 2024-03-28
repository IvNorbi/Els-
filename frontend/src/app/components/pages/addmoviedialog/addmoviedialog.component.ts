import { Component, Inject, NgModule } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA,MatDialog } from '@angular/material/dialog';
import { Film } from 'src/app/shared/models/filmek';
import { FilmekService } from 'src/app/services/filmek.service';
import { MatSnackBar } from '@angular/material/snack-bar';
import { FormsModule } from '@angular/forms';





@Component({
  selector: 'app-addmoviedialog',
  templateUrl: './addmoviedialog.component.html',
  styleUrls: ['./addmoviedialog.component.css'],
  
})
export class AddmoviedialogComponent {
  film: Film = new Film(); // Mindig elfelejtem, mindig......
  constructor(
    public dialogRef: MatDialogRef<AddmoviedialogComponent>,
    @Inject(MAT_DIALOG_DATA) public dialogData: Film,
    private filmService: FilmekService,
    private snackBar: MatSnackBar
  ) {}

  onSaveClick(): void {
    
    this.filmService.addMovie(this.film).subscribe({
      next: (newMovie: Film) => {
        if (newMovie.name && newMovie.name === this.film.name) {
          this.snackBar.open("Sikeres új film létrehozás: " + newMovie.name, "", {
            duration: 2000,
          });
          this.dialogRef.close(newMovie);
        } else {
          this.snackBar.open("Nem sikerült az új film létrehozása: " + this.film.name, "", {
            duration: 2000,
          });
        }
      },
      error: (error) => {
        console.error('Hiba történt az új film létrehozása közben:', error);
        this.snackBar.open("Hiba történt az új film létrehozása közben", "", {
          duration: 2000,
        });
      }
    });
  }  

  onCancelClick(): void {
    this.dialogRef.close();
  }

  onChange(event: any) {
    const file: File = event.target.files[0];

    if (file) {
      this.film.image = file;
    }
  }
}