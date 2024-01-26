<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    function index(): string
    {
        return "Это страница с моими любимыми играми";
    }
}
