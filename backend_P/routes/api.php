<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use \App\Http\Controllers\GenreController;
//Route::resource('genre', GenreController::class);
// Film műfajok lekérése
// Műfajok lekérése
//Route::get('genres', [GenreController::class, 'index']);
Route::get('movies/tags',   [GenreController::class, 'index']);


// Új műfaj létrehozása
Route::post('genres', [GenreController::class, 'store'])->middleware(['auth:sanctum', 'abilities:admin']);

// Adott műfaj megtekintése
Route::get('genres/{genre}', [GenreController::class, 'show']);

// Adott műfaj szerkesztése
Route::put('genres/{genre}', [GenreController::class, 'update'])->middleware('auth:sanctum');

// Adott műfaj törlése
Route::delete('genres/{genre}', [GenreController::class, 'destroy'])->middleware('auth:sanctum');

// Film műfajok lekérése
//Route::get('movies/{movie}/genres', function (Movie $movie) {
//    return $movie->genres;
//});       EZ A BLOKK IDE VALÓ??



use \App\Http\Controllers\MovieController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\RatingController;
use \App\Models\Movie;

/*************************************************************************************************************************************/
/******* Movie ***********************************************************************************************************************/
/*************************************************************************************************************************************/

//Route::resource('movie', MovieController::class);
//ezt lebontani 5 routra!

// Összes film lekérdezése
Route::get('movies', [MovieController::class, 'index']);

// Összes komment megtekintése egy filmnél
Route::get('movies/{movie}/comments', [CommentController::class, 'indexByMovieID']);

Route::get('movies/tag/{genre}', [MovieController::class, 'indexByGenre']);

//Randon 4 film
Route::get('movies/randommovies', [MovieController::class, 'randomMovies']);

// Adott film megtekintése
Route::get('movies/{movie}', [MovieController::class, 'show']);


// Új film létrehozása
Route::post('movies', [MovieController::class, 'store'])->middleware(['auth:sanctum', 'abilities:admin']);

// Adott film szerkesztése
Route::put('movies/{movie}', [MovieController::class, 'update'])->middleware('auth:sanctum');

// Adott film törlése
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->middleware('auth:sanctum');


Route::get('toplist', [MovieController::class, 'toplist']);



//Route::resource('movies.comments', CommentController::class);
//Route::get('movie/{movie}/comment', [CommentController::class, 'index']);

// Komment megtekintése
Route::get('movies/{movie}/comments/{user}', [CommentController::class, 'show']);

// Új komment hozzáadása
Route::post('movies/comments', [CommentController::class, 'store'])->middleware(['auth:sanctum', 'abilities:user']);

// Komment szerkesztése
Route::put('movies/comments/{comment}', [CommentController::class, 'update'])->middleware(['auth:sanctum', 'abilities:moderator']);

// Komment törlése
Route::delete('movies/comments/{comment}', [CommentController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:moderator']);



use \App\Http\Controllers\PeopleController;
// Színészek lekérése
Route::get('people', [PeopleController::class, 'index']);

// Új színész létrehozása
Route::post('people', [PeopleController::class, 'store'])->middleware('auth:sanctum');

// Színész megtekintése
Route::get('people/{people}', [PeopleController::class, 'show']);
// Színész megtekintése
Route::get('people/name/{peoplename}', [PeopleController::class, 'showByName']);

// Színész szerkesztése
Route::put('people/{people}', [PeopleController::class, 'update'])->middleware('auth:sanctum');

// Színész törlése
Route::delete('people/{people}', [PeopleController::class, 'destroy'])->middleware('auth:sanctum');



// Új rating hozzáadása
Route::post('movies/ratings', [RatingController::class, 'store'])->middleware(['auth:sanctum', 'abilities:user']);

Route::get('comments', [CommentController::class, 'index']);



use \App\Http\Controllers\RoleController;
// Role-ok lekérdezése
Route::get('roles', [RoleController::class, 'index']);

// Új role létrehozása
Route::post('roles', [RoleController::class, 'store'])->middleware('auth:sanctum');

// Role megtekintése
Route::get('roles/{role}', [RoleController::class, 'show']);

// Role szerkesztése
Route::put('roles/{role}', [RoleController::class, 'update'])->middleware('auth:sanctum');

// Role törlése
Route::delete('roles/{role}', [RoleController::class, 'destroy'])->middleware('auth:sanctum');






use \App\Models\User;

use \App\Http\Controllers\UserController;

Route::post('/user/login', [UserController::class, 'login']);

/* ....hiányzik a logout */

// User-ok lekérdezése
Route::get('users', [UserController::class, 'index'])->middleware('auth:sanctum');

// Új User létrehozása
Route::post('users', [UserController::class, 'store']);

// Role megtekintése
Route::get('users/{user}', [UserController::class, 'show'])->middleware('auth:sanctum');

// User szerkesztése
Route::put('users/{user}', [UserController::class, 'update'])->middleware(['auth:sanctum', 'abilities:admin']);

// User törlése
Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('auth:sanctum');