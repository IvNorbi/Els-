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
  comments: any[] = []; // Kommenteknek

  constructor(private activatedRoute: ActivatedRoute, private filmService: FilmekService) {
    this.loadMovieAndComments();
  }

  loadMovieAndComments(): void {
    this.activatedRoute.params.subscribe((params) => {
      if (params.id) {
        this.filmService.getMovieById(params.id).subscribe(serverMovie => {
          this.film = serverMovie;
          // Kommentek betöltése a film betöltése után
          this.loadComments(params.id);
        });
      }
    });
  }

  loadComments(movieId: string): void {
    this.filmService.getCommentsForMovie(movieId).subscribe(comments => {
      this.comments = comments;
    });
  }
}