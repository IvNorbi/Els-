import { Injectable } from '@angular/core';
import { Film } from '../shared/models/filmek';
import { sample_films, sample_tags } from 'src/data';
import { Tag } from '../shared/models/Tag';

@Injectable({
  providedIn: 'root'
})
export class FilmekService {

  constructor() { }

 /* Később majd ez fog csatlakozni a backendhez, most csak egy filmek listát ad vissza.*/ 
getAll():Film[]{
  return sample_films;
}

getAllFilmBySearchTerm(searchTerm:string){

  //One piece, one piece
  return this.getAll().filter(film => film.name.toLocaleLowerCase().includes(searchTerm.toLocaleLowerCase()))
}


getMovieById(movieId:string):Film{
  return this.getAll().find(film => film.id == movieId) ?? new Film();
}

getAllTags():Tag[]{
  return sample_tags;
}

getAllMovieByTag(tag:string):Film[]{
  return this.getAll().filter(film => film.tags?.includes(tag))
}

}
