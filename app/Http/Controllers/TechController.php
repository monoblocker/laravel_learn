<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechController extends Controller
{
    function index(): string {
        return "На этой странице расположены все технологии, которые я изучил";
    }
}
