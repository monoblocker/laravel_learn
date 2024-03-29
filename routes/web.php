<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TechController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AboutController::class, "index"])->name("main.index");

Route::get('/movies', [MoviesController::class, "getAll"]);
Route::get('/movies/create', [MoviesController::class, "create"])->name("movie.create");
Route::post('/movies/store', [MoviesController::class, "store"])->name("movie.store");
Route::get('/movies/update', [MoviesController::class, "update"]);
Route::get("/movies/delete", [MoviesController::class, "delete"]);
Route::get("/movies/restore", [MoviesController::class, "restore"]);

Route::get("/games", [GamesController::class, "getAll"]);
Route::get("/games/create", [GamesController::class, "create"]);
Route::get("/games/update", [GamesController::class, "update"]);
Route::get("/games/delete", [GamesController::class, "delete"]);
Route::get("/games/restore", [GamesController::class, "restore"]);

Route::get("/job", [JobController::class, "index"]);
Route::get("/tech", [TechController::class, "index"]);
