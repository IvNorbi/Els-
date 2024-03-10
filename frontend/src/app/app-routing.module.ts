import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/pages/home/home.component';
import { HeaderComponent } from './components/partials/header/header.component';
import { MainComponent } from './components/pages/main/main.component';
import { LoginComponent } from './components/pages/login/login.component';
import { RegComponent } from './components/pages/reg/reg.component';
import { MoviePageComponent } from './components/pages/movie-page/movie-page.component';
import { SearchComponent } from './components/partials/search/search.component';
import { ToplistComponent } from './components/pages/toplist/toplist.component';
import { AdminpanelComponent } from './components/pages/adminpanel/adminpanel.component';


//Angular material importok:


const routes: Routes = [

  
  {
    title     : 'Főoldal',
    path      : 'Main',
    component : MainComponent
  },

  {
    title     : 'Filmek',
    path      : 'Movies',
    component : HomeComponent
  },

  {
    title     : 'Belépés',
    path      : 'Login',
    component : LoginComponent
  },

  {
    title     : 'Regisztráció',
    path      : 'Register',
    component : RegComponent
  },

  {
    title     : 'Toplista',
    path      : 'Toplist',
    component : ToplistComponent
  },

  {
    title     : 'Adminpanel',
    path      : 'adminpanel',
    component : AdminpanelComponent
  },

  



  { path: '', redirectTo: '/Main', pathMatch: 'full' }, // Alapértelmezett útvonal átirányítása a home-ra
  { path: 'home', component: HomeComponent },
  { path: 'search/:searchTerm', component: HomeComponent }, 
  { path: 'film/:id', component: MoviePageComponent },
  {path: 'tag/:tag', component:HomeComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
