import { Injectable } from '@angular/core';
import { Film } from '../shared/models/filmek';
import { sample_films } from 'src/data';

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
}

