<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    function index(): string {
        return "На этой странице расположены мои любимые фильмы и аниме";
    }
}
