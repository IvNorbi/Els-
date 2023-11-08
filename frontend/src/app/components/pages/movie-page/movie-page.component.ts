import { Component } from '@angular/core';
import { ActivatedRoute, Route } from '@angular/router';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';

@Component({
  selector: 'app-movie-page',
  templateUrl: './movie-page.component.html',
  styleUrls: ['./movie-page.component.css']
})
export class MoviePageComponent {
  film!: Film;
  constructor(activatedRoute:ActivatedRoute, filmservice:FilmekService){
    activatedRoute.params.subscribe((params) =>{
      if(params.id)
      this.film = filmservice.getMovieById(params.id);
    })

  }


}
