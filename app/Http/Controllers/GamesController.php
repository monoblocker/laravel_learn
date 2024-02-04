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

        Game::create($newGame);

        return "создано";
    }

    function update(): string
    {
        $oldGame = Game::find(3);

        $newGame = [
            "name" => "Another new game"
        ];

        $oldGame->update($newGame);

        return "обновлено";
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
