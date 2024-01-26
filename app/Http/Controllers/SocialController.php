<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    function index(): string {
        $social = Social::find(1);
        dump("Сервис: $social->name");
        $social = Social::find(2);
        dump("Сервис: $social->name");

        return "На этой странице ссылки на меня в интернете";
    }
}
