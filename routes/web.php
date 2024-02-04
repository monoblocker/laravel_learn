<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\SocialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", [AboutController::class, "index"]);

Route::get('/hobby', [HobbyController::class, "index"]);

Route::get("/job", [JobController::class, "index"]);

Route::get("/error", [ErrorController::class, "index"]);

Route::get("/games", [GamesController::class, "index"]);
Route::get("/games/create", [GamesController::class, "create"]);

Route::get("/movies", [MoviesController::class, "index"]);

Route::get("/tech", [TechController::class, "index"]);

Route::get("/social", [SocialController::class, "index"]);
