import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Observable } from 'rxjs';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';

@Component({
  selector: 'app-toplist',
  templateUrl: './toplist.component.html',
  styleUrls: ['./toplist.component.css']
})
export class ToplistComponent {
  showTagBox: boolean = false;
  filmek: Film[] = [];
  constructor(private filmService: FilmekService, activatedRoute: ActivatedRoute) {
    let moviesObservalbe:Observable<Film[]>;
    activatedRoute.params.subscribe((params) => {
      if (params.searchTerm)
        moviesObservalbe = this.filmService.getAllFilmBySearchTerm(params.searchTerm);
      else if (params.tag)
        moviesObservalbe = this.filmService.getAllMovieByTag(params.tag);
      else
        moviesObservalbe = filmService.getTopList();

        moviesObservalbe.subscribe((serverMovies) => {
          this.filmek = serverMovies;
        })
    })
  }
}
