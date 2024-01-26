<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;

class TechController extends Controller
{
    function index(): string {
        $teches = Tech::all();

        foreach ($teches as $tech) {
            dump("Технология номер $tech->id, $tech->name");
        }
        return "На этой странице расположены все технологии, которые я изучил";
    }
}
