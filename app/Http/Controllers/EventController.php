<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventCount = event::count();
        return view('organisateur.dashboard', compact('eventCount'));
    }

    public function allevent()
    {
        $events = event::all();
        $categories = categorie::all();
       
        return view('organisateur.event', compact('events','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajouterevent(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'date' => 'required',
            'place_number' => 'required',
            'categorieID' => 'required',
            

    
        ]);
        event::create([
            'title' => $request->title,
            'description' => $request->description,
            'place' => $request->place,
            'date' => $request->date,
            'place_number' => $request->place_number,
            'IdCategory' => $request->categorieID,
            'IdUser' => $id,

        ]);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'place' => 'required',
            'date' => 'required',
            'place_number' => 'required',
        ]);

        $event = event::findOrFail($id);
        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'place' => $request->place,
            'date' => $request->date,
            'place_number' => $request->place_number
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $event = event::findOrFail($id);
        $event->delete();

        return redirect()->back();
    }
}