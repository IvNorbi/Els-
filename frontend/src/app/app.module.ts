import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/partials/header/header.component';
import { ChunkPipe, HomeComponent } from './components/pages/home/home.component';
import { StarRatingComponent } from './components/partials/star-rating/star-rating.component';
import { SearchComponent } from './components/partials/search/search.component';
import { MainComponent } from './components/pages/main/main.component';
import { LoginComponent } from './components/pages/login/login.component';
import { RegComponent } from './components/pages/reg/reg.component';
import { MoviePageComponent } from './components/pages/movie-page/movie-page.component';
import { TagsComponent } from './components/partials/tags/tags.component';
import { NotFoundComponent } from './components/partials/not-found/not-found.component';
import { ToplistComponent } from './components/pages/toplist/toplist.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { AdminpanelComponent } from './components/pages/adminpanel/adminpanel.component';
import { FormsModule } from '@angular/forms';

//Angular material importok:
import { MatTableModule }   from '@angular/material/table';
import { MatPaginatorModule} from '@angular/material/paginator';
import { MatSnackBarModule} from '@angular/material/snack-bar';
import {MatDialogModule } from '@angular/material/dialog';
import { MatButtonModule} from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import {MatToolbarModule} from '@angular/material/toolbar';
import {MatMenuModule} from '@angular/material/menu';
import { MatSidenavModule } from '@angular/material/sidenav';
import { FlexLayoutModule } from '@angular/flex-layout';
import { FooterComponent } from './components/partials/footer/footer.component';
import { MovieFormComponent } from './components/partials/movie-form/movie-form.component';
import { UseroptionsComponent } from './components/pages/useroptions/useroptions.component';
import { UserlistComponent } from './components/pages/userlist/userlist.component';
import { MatCardModule } from '@angular/material/card';
import { AddmoviedialogComponent } from './components/pages/addmoviedialog/addmoviedialog.component';
import { AddTagDialogComponent } from './components/pages/add-tag-dialog/add-tag-dialog.component';
import { MatFormFieldModule } from '@angular/material/form-field';
















@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    HomeComponent,
    StarRatingComponent,
    SearchComponent,
    MainComponent,
    LoginComponent,
    RegComponent,
    MoviePageComponent,
    ChunkPipe,
    TagsComponent,
    NotFoundComponent,
    ToplistComponent,
    AdminpanelComponent,
    FooterComponent,
    MovieFormComponent,
    UseroptionsComponent,
    UserlistComponent,
    AddmoviedialogComponent,
    AddTagDialogComponent
  
  ],
  imports: [
    FormsModule,
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    BrowserAnimationsModule, 
    MatTableModule,
    MatSnackBarModule,
    MatButtonModule,
    MatDialogModule,
    MatIconModule,
    MatToolbarModule,
    MatMenuModule,
    MatSidenavModule,
    FlexLayoutModule,
    MatPaginatorModule,
    MatCardModule,
    MatFormFieldModule
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
