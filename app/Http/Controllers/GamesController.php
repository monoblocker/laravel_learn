<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GamesController extends Controller
{
    function index(): string
    {
        $games = Game::all();

        return view("games", compact("games"));
    }

    function create(): string
    {
        $newGame = [
            "title" => "New game",
            "description" => "Description"
        ];

        return Game::firstOrCreate(["title" => $newGame["title"]], $newGame);
    }

    function update(): string
    {
        $newGame = [
            "title" => "Hades",
            "description" => "Рогалик"
        ];

        return Game::updateOrCreate(["title" => "New game"], $newGame);


    }

    function delete()
    {
        $game = Game::find(6);

        $game->delete();
    }

    function restore()
    {
        $game = Game::withTrashed()->find(6);

        $game->restore();
    }
}
