import { Injectable } from '@angular/core';
import { Film } from '../shared/models/filmek';
import { Tag } from '../shared/models/Tag';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { COMMENT_URL, MOVIES_BY_ID_URL, MOVIES_BY_SEARCH_URL, MOVIES_BY_TAG_URL,  MOVIES_TAGS_URL, MOVIES_URL, RANDOM_MOVIES_URL } from '../shared/contsants/urls';
import { Observable, map } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class FilmekService {


  constructor(private http:HttpClient) { }


  getAll(): Observable<Film[]> {
    return this.http.get<Film[]>(MOVIES_URL);
  }

  getAllByRatings(): Observable<Film[]> {
    return this.http.get<Film[]>(MOVIES_URL)
      .pipe(
        map((films: Film[]) => {
          return films.sort((a, b) => b.ratings - a.ratings);
        })
      );
  }

  getRandomMovies(): Observable<Film[]> {
    return this.http.get<Film[]>(RANDOM_MOVIES_URL);
  }


  getTopList(): Observable<Film[]> {
    return this.http.get<Film[]>(MOVIES_URL).pipe(
      map((movies: Film[]) => {
        return movies.sort((a, b) => {
          return a.toplist - b.toplist; // Növekvő sorrend
        });
      })
    );
  }

  getAllFilmBySearchTerm(searchTerm: string): Observable<Film[]> {
    return this.getAll().pipe(
      map(films => films.filter(film => film.name.toLowerCase().includes(searchTerm.toLowerCase())))
    );
  }

  
  addTagToMovie(movieId: number, tag: string): Observable<Film> {
    const token = sessionStorage.getItem('token');
    const headers = new HttpHeaders({
      'Authorization': 'Bearer ' + token,
      'Content-Type': 'application/json' 
    });

    const tagData = {
      movieId: movieId,
      tag: tag
    };

    return this.http.post<Film>(`${MOVIES_URL}/${movieId}/tag/`, tagData, { headers: headers });
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

deleteMovie(film:Film):Observable<boolean> {
  let token = sessionStorage.getItem("token");

    return this.http.delete<boolean>(MOVIES_URL+"/"+film.id,{headers: {
      "Authorization": "Bearer "+token
      }
    });
  }

updateMovie(film:Film):Observable<Film> {
  let token = sessionStorage.getItem("token");
  
  return this.http.put<Film>(MOVIES_URL+"/"+film.id, film, {headers: {
    "Authorization": "Bearer "+token
    }
  });
}

addMovie(film:Film):Observable<Film> {
  let token = sessionStorage.getItem("token");
  
  let formdata = new FormData();
  formdata.append('image', film.image, film.image.name);
  formdata.append('release_year', film.release_year.toString());
  formdata.append('name', film.name);
  formdata.append('description', film.description);

  return this.http.post<Film>(MOVIES_URL, formdata, {headers: {
    "Authorization": "Bearer "+token

   }
  });
}

//Kommentek:

getCommentsForMovie(movieId: string): Observable<any[]> {
  const url = `${MOVIES_URL}/${movieId}/comments`;
  return this.http.get<any[]>(url);
}

addComment(comment: any): Observable<any> {
  const token = sessionStorage.getItem("token");
  const headers = new HttpHeaders().set("Authorization", "Bearer " + token);

  return this.http.post<any>(COMMENT_URL, comment, { headers });
}


deleteComment(commentId: string): Observable<any> {
  const token = sessionStorage.getItem('token');
  if (!token) {
    throw new Error('Nincs bejelentkezve. Kérlek előbb jelentkezz be!');
  }

  const headers = new HttpHeaders({
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${token}`
  });

  return this.http.delete<any>(`${COMMENT_URL}${commentId}`, { headers });
}



//Külön serviceként próba, de így is hiba.
uploadImage(file: File) {
  const formData = new FormData();
  formData.append('image', file, 'image'); 
  const token = sessionStorage.getItem("token");
  const headers = new HttpHeaders({
    'Authorization': 'Bearer ' + token
  });
  return this.http.post<any>('http://localhost:5100/api/movies/upload', formData, { headers });
}


}

