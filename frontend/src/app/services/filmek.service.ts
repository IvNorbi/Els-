import { Injectable } from '@angular/core';
import { Film } from '../shared/models/filmek';
import { Tag } from '../shared/models/Tag';
import { HttpClient } from '@angular/common/http';
import { MOVIES_BY_ID_URL, MOVIES_BY_SEARCH_URL, MOVIES_BY_TAG_URL,  MOVIES_TAGS_URL, MOVIES_URL } from '../shared/contsants/urls';
import { Observable, map } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class FilmekService {

  constructor(private http:HttpClient) { }


  getAll(): Observable<Film[]> {
    return this.http.get<Film[]>(MOVIES_URL);
  }
  getTopList(): Observable<Film[]> {
    return this.http.get<Film[]>(MOVIES_URL).pipe(
      map((movies: Film[]) => {
        // Rendezés a toplist alapján
        return movies.sort((a, b) => {
          // Feltételezzük, hogy a "toplist" a filmek egyik tulajdonsága
          return a.toplist - b.toplist; // Növekvő sorrend
        });
      })
    );
  }


  getAllFilmBySearchTerm(searchTerm: string) {
    return this.http.get<Film[]>(MOVIES_BY_SEARCH_URL + searchTerm);
  }


getMovieById(movieId:string): Observable<Film>{
  return this.http.get<Film>(MOVIES_BY_ID_URL + movieId);
}

getAllTags(): Observable<Tag[]>{
  return this.http.get<Tag[]>(MOVIES_TAGS_URL);
}

getAllMovieByTag(tag:string): Observable<Film[]>{
  return tag  === "All" ?
  this.getAll() :
  this.http.get<Film[]>(MOVIES_BY_TAG_URL + tag);
  }


}
