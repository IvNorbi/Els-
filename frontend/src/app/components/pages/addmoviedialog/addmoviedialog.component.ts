import { Component, Inject } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Film } from 'src/app/shared/models/filmek';

@Component({
  selector: 'app-addmoviedialog',
  templateUrl: './addmoviedialog.component.html',
  styleUrls: ['./addmoviedialog.component.css']
})
export class AddmoviedialogComponent {
  constructor(
    public dialogRef: MatDialogRef<AddmoviedialogComponent>,
    @Inject(MAT_DIALOG_DATA) public film: Film
  ) {}

  onSaveClick(): void {
    //Ide majd a többi rész.
  }

  onCancelClick(): void {
    this.dialogRef.close();
  }
}
