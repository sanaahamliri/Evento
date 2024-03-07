<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    
        public function showDetails()
        {
            $events = event::with('categories')->get();
            return view('singlePage', compact('events'));
        }
    }
