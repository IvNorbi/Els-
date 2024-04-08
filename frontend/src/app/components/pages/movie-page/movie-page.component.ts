import { Component, Inject, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';
import { MAT_DIALOG_DATA, MatDialog, MatDialogRef } from '@angular/material/dialog';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';
import { of } from 'rxjs';
import { switchMap } from 'rxjs/operators';

@Component({
  selector: 'app-movie-page',
  templateUrl: './movie-page.component.html',
  styleUrls: ['./movie-page.component.css']
})
export class MoviePageComponent implements OnInit {
  film!: Film;
  comments: any[] = [];
  newCommentContent: string = '';
  user: { name: string } | null = null;
  movieId: string | null = null; 

  constructor(
    public userService: UserService,
    private activatedRoute: ActivatedRoute,
    private filmService: FilmekService,
    private dialog: MatDialog
  ) { }

  ngOnInit() {
    this.loadData();
  }

  loadData() {
    this.userService.getLoggedInUser().pipe(
      switchMap((userData: UserModel) => {
        this.user = { name: userData.name ?? 'Névtelen' };
        return this.activatedRoute.params;
      }),
      switchMap(params => {
        this.movieId = params.id; 
        if (params.id) {
          return this.filmService.getMovieById(params.id);
        }
        return of(null);
      })
    ).subscribe(serverMovie => {
      this.film = serverMovie as Film; 
      if (this.movieId) {
        this.loadComments(this.movieId);
      }
    });
  }

  loadComments(movieId: string) {
    this.filmService.getCommentsForMovie(movieId).subscribe(comments => {
      // Ellenőrizzük minden kommentet
      comments.forEach(comment => {
        // Hívd meg a UserService-t a felhasználó nevének lekérésére a felhasználó ID-je alapján
        this.userService.getUserNameById(comment.user_id).subscribe(userName => {
          // Ha megvan a felhasználó neve, adjuk hozzá a komment objektumhoz
          comment.userName = userName;
        });
      });
      // Állítsd be a kommenteket a felhasználónevekkel ellátott kommentekkel
      this.comments = comments;
    });
  }

  addComment(content: string): void {
    if (!this.film) {
      console.error('Nincs kiválasztva film a komment hozzáadásához.');
      return;
    }
  
    const userName = this.user?.name ?? 'Ismeretlen felhasználó';
    const comment = { content, movie_id: this.film.id, userName, date: new Date() };
    this.filmService.addComment(comment).subscribe({
      next: (newComment) => {
        this.comments.push(newComment);
        this.newCommentContent = '';
      },
      error: (error) => {
        console.error('Hiba történt a komment hozzáadása közben:', error);
      }
    });
  }

  confirmDelete(commentId: string): void {
    const dialogRef = this.dialog.open(ConfirmDeleteDialogComponent, {
      width: '250px',
      data: { commentId }
    });

    dialogRef.afterClosed().subscribe(result => {
      if (result === 'confirm') {
        this.deleteComment(commentId);
      }
    });
  }

  deleteComment(commentId: string): void {
    this.filmService.deleteComment(commentId).subscribe(
      () => {
        this.comments = this.comments.filter(comment => comment.id !== commentId);
      },
      (error) => {
        console.error('Hiba történt a komment törlése közben:', error);
      }
    );
  }
}

@Component({
  selector: 'confirm-delete-dialog',
  template: `
    <h1 mat-dialog-title>Biztos törölni szeretnéd?</h1>
    <div mat-dialog-actions>
      <button mat-button (click)="onNoClick()">Nem</button>
      <button mat-button (click)="onYesClick()">Igen</button>
    </div>
  `,
})
export class ConfirmDeleteDialogComponent {
  constructor(private dialogRef: MatDialogRef<ConfirmDeleteDialogComponent>,
              @Inject(MAT_DIALOG_DATA) public data: any) {}

  onNoClick(): void {
    this.dialogRef.close();
  }

  onYesClick(): void {
    this.dialogRef.close('confirm');
  }
}
