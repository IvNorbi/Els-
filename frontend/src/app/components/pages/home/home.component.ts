import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';
import { Pipe, PipeTransform } from '@angular/core';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
})
export class HomeComponent {
  showTagBox: boolean = false;
  filmek: Film[] = [];

  constructor(private filmService: FilmekService, activatedRoute:ActivatedRoute) {

    let moviesObservable:Observable<Film[]>;
    activatedRoute.params.subscribe((params) =>{
      if(params.searchTerm)
        moviesObservable = this.filmService.getAllFilmBySearchTerm(params.searchTerm);
      else if (params.tag)
        moviesObservable = this.filmService.getAllMovieByTag(params.tag);
      else
        moviesObservable = filmService.getAll(); 


        moviesObservable.subscribe((serverMovies) => {
          this.filmek = serverMovies;
        })

    });
  }

  toggleTagBox() {
    this.showTagBox = !this.showTagBox;
  }
}

// chunkPipe, 1 sorba 3-as tördeléshez.
@Pipe({
  name: 'chunkPipe'
})
export class ChunkPipe implements PipeTransform {
  transform(array: any[], chunkSize: number): any[] {
    const result = [];
    for (let i = 0; i < array.length; i += chunkSize) {
      result.push(array.slice(i, i + chunkSize));
    }
    return result;
  }
}
