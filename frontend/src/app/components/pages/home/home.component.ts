import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
  filmek: Film[] = [];

  constructor(private filmService: FilmekService, activatedRoute:ActivatedRoute) {
    
    activatedRoute.params.subscribe((params) =>{
      if(params.searchTerm)
      this.filmek = this.filmService.getAllFilmBySearchTerm(params.searchTerm);
      else
          /* a filmek megvannak töltve most a filmService adataival, ami a sample_films adatait használja.  */
    this.filmek = filmService.getAll(); 
    })
  }
}
