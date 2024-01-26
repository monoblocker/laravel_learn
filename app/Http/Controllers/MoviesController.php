<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    function index(): string {
        $movies = Movie::all();

        foreach ($movies as $movie) {
            dump("$movie->name\n$movie->description\n");
        }

        $movie = Movie::where("name", "Гнев человеческий")->first();

        dump($movie->name);

        return "На этой странице расположены мои любимые фильмы и аниме";
    }
}
