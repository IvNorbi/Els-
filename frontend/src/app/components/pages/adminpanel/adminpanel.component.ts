import { Component, Inject, OnInit } from '@angular/core';
import { MAT_DIALOG_DATA, MatDialog, MatDialogModule } from '@angular/material/dialog';
import { Observable } from 'rxjs';
import { Film } from 'src/app/shared/models/filmek';
import { FilmekService } from 'src/app/services/filmek.service';
import { AddTagDialogComponent } from '../add-tag-dialog/add-tag-dialog.component';
import { MovieFormComponent } from '../../partials/movie-form/movie-form.component';
import { AddmoviedialogComponent } from '../addmoviedialog/addmoviedialog.component';
import { UserService } from 'src/app/services/user.service';
import {PageEvent, MatPaginatorModule} from '@angular/material/paginator';



@Component({
  selector: 'app-adminpanel',
  templateUrl: './adminpanel.component.html',
  styleUrls: ['./adminpanel.component.css']
})
export class AdminpanelComponent implements OnInit {
  
  length = 1;
  pageSize = 5;
  pageIndex = 0;
  pageSizeOptions = [5, 10, 25];

  hidePageSize = false;
  showPageSizeOptions = true;
  showFirstLastButtons = true;
  disabled = false;

  pageEvent: PageEvent| null= null;

  handlePageEvent(e: PageEvent) {
    this.pageEvent = e;
    this.pageSize = e.pageSize;
    this.pageIndex = e.pageIndex;
    
    this.length = this.filmek.filter(film =>
      film.name.toLowerCase().includes(this.searchTerm.toLowerCase())
    ).length;

    this.filteredFilms = this.filmek.filter(film =>
      film.name.toLowerCase().includes(this.searchTerm.toLowerCase())
    ).slice(this.pageIndex*this.pageSize, (this.pageIndex+1)*this.pageSize);
  }

  setPageSizeOptions(setPageSizeOptionsInput: string) {
    if (setPageSizeOptionsInput) {
      this.pageSizeOptions = setPageSizeOptionsInput.split(',').map(str => +str);
    }
  }
  
  
  
  filmek: Film[] = [];
  filteredFilms: Film[] = [];
  searchTerm: string = '';

  constructor(
    private filmService: FilmekService,
    public userService: UserService,
    private dialog: MatDialog,) {}

  ngOnInit(): void {
    this.loadMovies();
  }

  openDialog(): void {
    const dialogRef = this.dialog.open(AddmoviedialogComponent, {
      width: '400px',
      data: {} // Üres objektummal nyitjuk meg a dialogot
    });

    dialogRef.afterClosed().subscribe(result => {
      console.log('The dialog was closed');
    });
  }

  //FILMEK BETÖLTÉSE
  loadMovies(): void {
    this.filmService.getAll().subscribe((serverMovies: Film[]) => {
      this.filmek = serverMovies;
      this.length = serverMovies.length;
      
      this.filteredFilms = this.filmek.filter(film =>
        film.name.toLowerCase().includes(this.searchTerm.toLowerCase())
      ).slice(this.pageIndex*this.pageSize, (this.pageIndex+1)*this.pageSize);
    });
  }
  
  //KERESÉS
  filterMovies(): void {
    if (this.searchTerm.trim() === '') {
      this.filteredFilms = this.filmek;
      this.length = this.filmek.length;

    } else {
      this.length = this.filmek.filter(film =>
        film.name.toLowerCase().includes(this.searchTerm.toLowerCase())
      ).length;

      this.filteredFilms = this.filmek.filter(film =>
        film.name.toLowerCase().includes(this.searchTerm.toLowerCase())
      ).slice(this.pageIndex*this.pageSize, (this.pageIndex+1)*this.pageSize);
    }
  }
  
  //TÖRLÉS
  deleteMovie(film: Film): void {
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

  //MÓDOSÍTÁS
  editMovie(film: Film): void {
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

  //TAG HOZZÁADÁS.
  addTag(film: Film): void {
    const dialogRef = this.dialog.open(AddTagDialogComponent, {
      width: '400px',
      data: { film: film } 
    });
  
    dialogRef.afterClosed().subscribe(result => {
      console.log('A dialógus bezárult.');
    });
  }
}



//Erősen megkérdőjelezhető rész következik: 
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
  constructor(@Inject(MAT_DIALOG_DATA) public title: string) {}
}