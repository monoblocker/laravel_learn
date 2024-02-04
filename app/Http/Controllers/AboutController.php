<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    function index() {
//        $movies = getAll();
//        $games = getAll();

        return view("about");
    }
}
