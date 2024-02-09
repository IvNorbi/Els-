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
Route::get('genres', [GenreController::class, 'index']);

// Új műfaj létrehozása
Route::post('genres', [GenreController::class, 'store'])->middleware('auth:api');

// Adott műfaj megtekintése
Route::get('genres/{genre}', [GenreController::class, 'show']);

// Adott műfaj szerkesztése
Route::put('genres/{genre}', [GenreController::class, 'update'])->middleware('auth:api');

// Adott műfaj törlése
Route::delete('genres/{genre}', [GenreController::class, 'destroy'])->middleware('auth:api');

// Film műfajok lekérése
//Route::get('movies/{movie}/genres', function (Movie $movie) {
//    return $movie->genres;
//});       EZ A BLOKK IDE VALÓ??



use \App\Http\Controllers\MovieController;
//Route::resource('movie', MovieController::class);
//ezt lebontani 5 routra!
// Összes film lekérdezése
Route::get('movies', [MovieController::class, 'index']);

// Új film létrehozása
Route::post('movies', [MovieController::class, 'store'])->middleware('auth:api');

// Adott film megtekintése
Route::get('movies/{movie}', [MovieController::class, 'show']);

// Adott film szerkesztése
Route::put('movies/{movie}', [MovieController::class, 'update'])->middleware('auth:api');

// Adott film törlése
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->middleware('auth:api');




use \App\Http\Controllers\CommentController;
//Route::resource('movies.comments', CommentController::class);
//Route::get('movie/{movie}/comment', [CommentController::class, 'index']);
// Új komment hozzáadása
Route::post('movies/{movie}/comments', [CommentController::class, 'store'])->middleware('auth:api');

// Komment megtekintése
Route::get('movies/{movie}/comments/{comment}', [CommentController::class, 'show']);

// Komment szerkesztése
Route::put('movies/{movie}/comments/{comment}', [CommentController::class, 'update'])->middleware('auth:api');

// Komment törlése
Route::delete('movies/{movie}/comments/{comment}', [CommentController::class, 'destroy'])->middleware('auth:api');



use \App\Http\Controllers\PeopleController;
// Színészek lekérése
Route::get('people', [PeopleController::class, 'index']);

// Új színész létrehozása
Route::post('people', [PeopleController::class, 'store'])->middleware('auth:api');

// Színész megtekintése
Route::get('people/{people}', [PeopleController::class, 'show']);

// Színész szerkesztése
Route::put('people/{people}', [PeopleController::class, 'update'])->middleware('auth:api');

// Színész törlése
Route::delete('people/{people}', [PeopleController::class, 'destroy'])->middleware('auth:api');
