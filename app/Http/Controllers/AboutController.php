<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(): string {
        dump("All ok");
        return "Меня зовут Михаил, я backend программист на PHP.";
    }
}
