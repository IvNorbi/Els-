import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Observable } from 'rxjs';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';

@Component({
  selector: 'app-toplist',
  templateUrl: './toplist.component.html',
  styleUrls: ['./toplist.component.css']
})
export class ToplistComponent implements OnInit {
  filmek: Film[] = [];

  constructor(private filmService: FilmekService, private activatedRoute: ActivatedRoute) { }

  ngOnInit(): void {
    this.loadMovies();
  }

  loadMovies() {
    let moviesObservable: Observable<Film[]>;
    this.activatedRoute.params.subscribe(params => {
      if (params.searchTerm)
        moviesObservable = this.filmService.getAllFilmBySearchTerm(params.searchTerm);
      else if (params.tag)
        moviesObservable = this.filmService.getAllMovieByTag(params.tag);
      else
        moviesObservable = this.filmService.getTopList();

      moviesObservable.subscribe(serverMovies => {
        // Rendezés ratings szerint csökkenő sorrendben
        this.filmek = serverMovies.sort((a, b) => b.ratings - a.ratings);
        });
    });
  }
}
