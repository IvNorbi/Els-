import { Component, OnInit } from '@angular/core';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent implements OnInit {
  movies: Film[] = [];

  constructor(private filmekService: FilmekService) { }

  ngOnInit(): void {
    this.fetchRandomMovies();
  }

  fetchRandomMovies(): void {
    this.filmekService.getRandomMovies()
      .subscribe(movies => {
        this.movies = movies;
      });
  }
}
