<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\GenresController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('mainpage');
// });

// Route::get('list', [MoviesController::class, 'index']);

Route::get('/', [GenresController::class, 'index']);

Route::get('/genre/{id}', [GenresController::class, 'genre_page']);

//Route::get('/detail/{id}', [MoviesController::class, 'index']);
Route::get('/detail/{id}', [GenresController::class, 'detail_page']);
