<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    function index(): string {
        return "Мне нравится смотреть играть в игры и слушать музыку разных жанров";
    }
}
