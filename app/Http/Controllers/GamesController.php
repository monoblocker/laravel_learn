<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    function index(): string
    {
        $game = Game::find(1);
        dump("$game->name\n$game->description");

        $game = Game::find(2);
        dump("$game->name\n$game->description");
        return "Это страница с моими любимыми играми";
    }
}
