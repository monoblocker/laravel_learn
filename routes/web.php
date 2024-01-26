<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return "Меня зовут Михаил, я backend программист на PHP.";
});

Route::get('/hobby', function () {
    return "Мне нравится смотреть играть в игры и слушать музыку разных жанров";
});

Route::get("/job", function () {
    return "Пока что я не работаю. Я учусь в университете";
});

Route::get("/error", function () {
   return "Похоже, что-то пошло не так";
});

Route::get("/games", function () {
    return "Это страница с моими любимыми играми";
});

Route::get("/movies", function () {
   return "На этой странице расположены мои любимые фильмы и аниме";
});

Route::get("/tech", function () {
    return "На этой странице расположены все технологии, которые я изучил";
});

Route::get("/social", function () {
    return "На этой странице ссылки на меня в интернете";
});
