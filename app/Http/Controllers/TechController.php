<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;

class TechController extends Controller
{
    function index(): string {
        $tech = Tech::find(1);
        dump("Технология номер $tech->id, $tech->name");
        $tech = Tech::find(2);
        dump("Технология номер $tech->id, $tech->name");
        return "На этой странице расположены все технологии, которые я изучил";
    }
}
