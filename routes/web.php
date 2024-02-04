<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TechController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AboutController::class, "index"])->name("main.index");

Route::get('/movies', [MoviesController::class, "getAll"]);

Route::get("/job", [JobController::class, "index"]);

Route::get("/games", [GamesController::class, "getAll"]);
Route::get("/games/create", [GamesController::class, "create"]);
Route::get("/games/update", [GamesController::class, "update"]);
Route::get("/games/delete", [GamesController::class, "delete"]);
Route::get("/games/restore", [GamesController::class, "restore"]);

Route::get("/tech", [TechController::class, "index"]);
