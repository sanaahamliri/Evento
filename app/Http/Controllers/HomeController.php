<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showEvents()
    {
        $events = event::all();
        $categories = categorie::all();
       
        return view('home', compact('events','categories'));
    }
}
