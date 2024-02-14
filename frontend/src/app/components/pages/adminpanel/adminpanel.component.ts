import { Component, Pipe, PipeTransform, Inject } from '@angular/core';
import { MatDialog, MAT_DIALOG_DATA, MatDialogModule } from '@angular/material/dialog';
import { ActivatedRoute } from '@angular/router';
import { Observable } from 'rxjs';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';
import { MovieFormComponent } from '../../partials/movie-form/movie-form.component';

@Component({
  selector: 'app-adminpanel',
  templateUrl: './adminpanel.component.html',
  styleUrls: ['./adminpanel.component.css']
})
export class AdminpanelComponent {
  showTagBox: boolean = false;
  filmek: Film[] = [];
  
  constructor(
    private filmService: FilmekService,
    private activatedRoute: ActivatedRoute,
    private dialog: MatDialog
  ) {
    this.loadMovies();
  }
  
  loadMovies() {
    this.activatedRoute.params.subscribe((params) => {
      let moviesObservable: Observable<Film[]>;
      if (params.searchTerm)
        moviesObservable = this.filmService.getAllFilmBySearchTerm(params.searchTerm);
      else if (params.tag)
        moviesObservable = this.filmService.getAllMovieByTag(params.tag);
      else
        moviesObservable = this.filmService.getAll();

      moviesObservable.subscribe((serverMovies) => {
        this.filmek = serverMovies;
      });
    });
  }

  deleteMovie(film: Film) {
    const dialogRef = this.dialog.open(ConfirmationDialogComponent, {
      width: '250px',
      data: 'Biztos törölni szeretné?'
    });

    dialogRef.afterClosed().subscribe(result => {
      if (result) {
        this.filmService.deleteMovie(film).subscribe(response => {
          if (response) {
            this.loadMovies();
          } else {
            console.error('Hiba történt a törlés során.');
          }
        });
      }
    });
  }

  editMovie(film: Film) {
    const dialogRef = this.dialog.open(MovieFormComponent, {
      width: '400px',
      data: film 
    });

    dialogRef.afterClosed().subscribe(updatedFilm => {
      if (updatedFilm) {
        this.filmService.updateMovie(updatedFilm).subscribe(response => {
          if (response) {
            this.loadMovies();
          } else {
            console.error('Hiba történt a módosítás során.');
          }
        });
      }
    });
  }

  toggleTagBox() {
    this.showTagBox = !this.showTagBox;
  }
}


@Component({
  selector: 'confirmation-dialog',
  template: `
    <h1 mat-dialog-title>{{ title }}</h1>
    <div mat-dialog-actions>
      <button mat-button [mat-dialog-close]="true" cdkFocusInitial>Igen</button>
      <button mat-button [mat-dialog-close]="false">Mégsem</button>
    </div>`,
    standalone:true,
    imports:[MatDialogModule]
})
export class ConfirmationDialogComponent {
  constructor(@Inject(MAT_DIALOG_DATA) public title: string) {} // Inject az adatokat, de nem kell az Inject importálni
}