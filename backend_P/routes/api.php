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
Route::post('genres', [GenreController::class, 'store'])->middleware('auth:sanctum');

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


//Route::resource('movie', MovieController::class);
//ezt lebontani 5 routra!

// Összes film lekérdezése
Route::get('movies', [MovieController::class, 'index']);

// Összes komment megtekintése egy filmnél
Route::get('movies/{movie}/comments', [CommentController::class, 'indexByMovieID']);

// Adott film megtekintése
Route::get('movies/{movie}', [MovieController::class, 'show']);

// Új film létrehozása
Route::post('movies', [MovieController::class, 'store'])->middleware('auth:sanctum');

// Adott film szerkesztése
Route::put('movies/{movie}', [MovieController::class, 'update'])->middleware('auth:sanctum');

// Adott film törlése
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->middleware('auth:sanctum');


Route::get('movies/toplist', [MovieController::class, 'toplist']);



//Route::resource('movies.comments', CommentController::class);
//Route::get('movie/{movie}/comment', [CommentController::class, 'index']);

// Komment megtekintése
Route::get('movies/{movie}/comments/{user}', [CommentController::class, 'show']);

// Új komment hozzáadása
Route::post('movies/comments', [CommentController::class, 'store'])->middleware('auth:sanctum');

// Komment szerkesztése
Route::put('movies/comments/{comment}', [CommentController::class, 'update'])->middleware('auth:sanctum');

// Komment törlése
Route::delete('movies/comments/{comment}', [CommentController::class, 'destroy'])->middleware('auth:sanctum');



use \App\Http\Controllers\PeopleController;
// Színészek lekérése
Route::get('people', [PeopleController::class, 'index']);

// Új színész létrehozása
Route::post('people', [PeopleController::class, 'store'])->middleware('auth:sanctum');

// Színész megtekintése
Route::get('people/{people}', [PeopleController::class, 'show']);

// Színész szerkesztése
Route::put('people/{people}', [PeopleController::class, 'update'])->middleware('auth:sanctum');

// Színész törlése
Route::delete('people/{people}', [PeopleController::class, 'destroy'])->middleware('auth:sanctum');



// Új rating hozzáadása
Route::post('movies/ratings', [RatingController::class, 'store'])->middleware('auth:sanctum');

Route::get('comments', [CommentController::class, 'index']);

use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::post('/user/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken("MovieCorner");
});