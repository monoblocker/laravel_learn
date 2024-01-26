<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    function index(): string {
        return "На этой странице ссылки на меня в интернете";
    }
}
