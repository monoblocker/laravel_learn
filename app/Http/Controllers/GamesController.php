<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    function index(): string
    {
        $games = Game::all();

        foreach ($games as $game) {
            dump("$game->name\n$game->description");
        }

        return "Это страница с моими любимыми играми";
    }

    function create(): string
    {
        $newGame = [
            "name" => "New game",
            "description" => "Description"
        ];

        return Game::firstOrCreate(["name" => $newGame["name"]], $newGame);
    }

    function update(): string
    {
        $newGame = [
            "name" => "Hades",
            "description" => "Рогалик"
        ];

        return Game::updateOrCreate(["name" => "New game"], $newGame);


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
