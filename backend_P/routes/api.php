<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PeopleController;
use \App\Http\Controllers\GenreController;
use \App\Http\Controllers\MovieController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\RatingController;
use \App\Http\Controllers\RoleController;
use \App\Http\Controllers\UserController;
use \App\Models\User;
use \App\Models\Movie;

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

//************************************************************************************************************************************/
/******* Genre/Tag *******************************************************************************************************************/
/*************************************************************************************************************************************/


//Route::get('genres', [GenreController::class, 'index']);
Route::get('movies/tags',   [GenreController::class, 'index']);


// Új műfaj létrehozása
Route::post('genres', [GenreController::class, 'store'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Adott műfaj megtekintése
Route::get('genres/{genre}', [GenreController::class, 'show']);

// Adott műfaj szerkesztése
Route::put('genres/{genre}', [GenreController::class, 'update'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Adott műfaj törlése
Route::delete('genres/{genre}', [GenreController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);


/*************************************************************************************************************************************/
/******* Movie ***********************************************************************************************************************/
/*************************************************************************************************************************************/

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
Route::post('movies', [MovieController::class, 'store'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Adott film szerkesztése
Route::put('movies/{movie}', [MovieController::class, 'update'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Adott film törlése
Route::delete('movies/{movie}', [MovieController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Filmes toplista
Route::get('toplist', [MovieController::class, 'toplist']);


// Új műfaj hozzáadása filmhez
Route::post('movies/{movie}/tag', [MovieController::class, 'addGenre'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

/*************************************************************************************************************************************/
/******* Comment *********************************************************************************************************************/
/*************************************************************************************************************************************/

// Összes komment megtekintése
Route::get('comments', [CommentController::class, 'index']);
// Komment megtekintése
Route::get('movies/{movie}/comments/{user}', [CommentController::class, 'show']);

// Új komment hozzáadása
Route::post('movies/comments', [CommentController::class, 'store'])->middleware(['auth:sanctum', 'abilities:user']);

// Komment szerkesztése
Route::put('movies/comments/{comment}', [CommentController::class, 'update'])->middleware(['auth:sanctum', 'abilities:moderator']);

// Komment törlése
Route::delete('movies/comments/{comment}', [CommentController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:moderator']);


/*************************************************************************************************************************************/
/******* People **********************************************************************************************************************/
/*************************************************************************************************************************************/

// Színészek lekérése
Route::get('people', [PeopleController::class, 'index']);

// Új színész létrehozása
Route::post('people', [PeopleController::class, 'store'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Színész megtekintése
Route::get('people/{people}', [PeopleController::class, 'show']);
// Színész megtekintése
Route::get('people/name/{peoplename}', [PeopleController::class, 'showByName']);

// Színész szerkesztése
Route::put('people/{people}', [PeopleController::class, 'update'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Színész törlése
Route::delete('people/{people}', [PeopleController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);


/*************************************************************************************************************************************/
/******* Rating **********************************************************************************************************************/
/*************************************************************************************************************************************/

// Új rating hozzáadása
Route::post('movies/ratings', [RatingController::class, 'store'])->middleware(['auth:sanctum', 'abilities:user']);


/*************************************************************************************************************************************/
/******* Role ************************************************************************************************************************/
/*************************************************************************************************************************************/

// Role-ok lekérdezése
Route::get('roles', [RoleController::class, 'index']);

// Új role létrehozása
Route::post('roles', [RoleController::class, 'store'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Role megtekintése
Route::get('roles/{role}', [RoleController::class, 'show']);

// Role szerkesztése
Route::put('roles/{role}', [RoleController::class, 'update'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// Role törlése
Route::delete('roles/{role}', [RoleController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:admin']);


/*************************************************************************************************************************************/
/******* User ************************************************************************************************************************/
/*************************************************************************************************************************************/

// User login
Route::post('/user/login', [UserController::class, 'login']);

// User logout
Route::post('/user/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

// User-ek lekérdezése
Route::get('users', [UserController::class, 'index'])->middleware(['auth:sanctum']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Új user létrehozása
Route::post('registration', [UserController::class, 'store']);

// Role megtekintése
Route::get('users/{user}', [UserController::class, 'show'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);

// User szerkesztése
Route::put('users/{user}', [UserController::class, 'update'])->middleware(['auth:sanctum', 'abilities:admin']);

// User szerkesztése
Route::put('user/', [UserController::class, 'updateMyProfile'])->middleware('auth:sanctum');

// User törlése
Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware(['auth:sanctum', 'abilities:admin,moderator']);