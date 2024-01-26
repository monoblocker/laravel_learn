<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    function index():string {
        return "Похоже, что-то пошло не так";
    }
}
