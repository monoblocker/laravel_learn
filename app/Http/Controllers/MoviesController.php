<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    function getAll(): string {
        return Movie::all();
    }

    function create()
    {
        return Movie::firstOrCreate(["title" => "some movie"], [
            "title" => "some movie",
            "description" => "some description"
        ]);
    }

    function update()
    {
        return Movie::updateOrCreate(["title" => "some movie"], [
            "title" => "updated some movie",
            "description" => "some description"
        ]);
    }

    function delete():void
    {
        $movie = Movie::first();

        $movie->delete();
    }

    function restore()
    {
        $movie = Movie::withTrashed()->first();

        $movie->restore();
    }
}
