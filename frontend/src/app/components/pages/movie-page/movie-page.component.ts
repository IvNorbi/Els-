import { Component, Inject } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { FilmekService } from 'src/app/services/filmek.service';
import { Film } from 'src/app/shared/models/filmek';
import { MAT_DIALOG_DATA, MatDialog, MatDialogRef } from '@angular/material/dialog';
import { UserService } from 'src/app/services/user.service';
import { UserModel } from 'src/app/shared/models/userModel';

@Component({
  selector: 'app-movie-page',
  templateUrl: './movie-page.component.html',
  styleUrls: ['./movie-page.component.css']
})
export class MoviePageComponent {
  film!: Film;
  comments: any[] = []; // Kommenteknek
  newCommentContent: string = ''; //Új kommenteknek

  constructor(
    public service: UserService,
    private activatedRoute: ActivatedRoute,
    private filmService: FilmekService,
    private dialog: MatDialog
  ) {
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

  addComment(content: string): void {
    if (!this.film) {
      console.error('Nincs kiválasztva film a komment hozzáadásához.');
      return;
    }
  
    const comment = { content, movie_id: this.film.id }; // A film azonosítójának hozzáadása
    this.filmService.addComment(comment).subscribe({
      next: (newComment) => {
        this.comments.push(newComment); // Új komment hozzáadása.
      },
      error: (error) => {
        console.error('Hiba történt a komment hozzáadása közben:', error);
        // Ide majd hibaüzenet.
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
        // Frissítés törlés után
        this.comments = this.comments.filter(comment => comment.id !== commentId);
      },
      (error) => {
        console.error('Hiba történt a komment törlése közben:', error);
        //  Ide valami hibaüzenet.
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
