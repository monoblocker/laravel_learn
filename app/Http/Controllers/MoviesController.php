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
        return view("movie.create");
    }

    function store()
    {
        $data = request()->validate([
           "title" => "string",
           "description" => "string"
        ]);

        Movie::create($data);
        return redirect()->route("main.index");
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
