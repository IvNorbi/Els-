import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { FilmekService } from 'src/app/services/filmek.service';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css']
})
export class SearchComponent implements OnInit {
  searchTerm = '';

  constructor(private activatedRoute: ActivatedRoute, private router: Router, private filmService: FilmekService) {
    this.activatedRoute.params.subscribe((params) => {
      if (params.searchTerm) {
        this.searchTerm = params.searchTerm;
        this.search(params.searchTerm); // Automatikusan végrehajtjuk a keresést, ha van paraméter
      }
    });
  }

  ngOnInit(): void {
  }

  search(term: string): void {
    if (term) {
      this.router.navigateByUrl('/search/' + term);
      this.filmService.getAllFilmBySearchTerm(term).subscribe((results: any[]) => {
        // Itt kezeld a keresés eredményeit
      });
    } else {
      this.router.navigateByUrl('/home');
    }
  }
}
