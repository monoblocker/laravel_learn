<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    function index(): string {
        $movie = Movie::find(1);
        dump("$movie->name\n$movie->description\n");

        $movie = Movie::find(2);
        dump("$movie->name\n$movie->description\n");


        return "На этой странице расположены мои любимые фильмы и аниме";
    }
}
