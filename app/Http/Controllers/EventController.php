<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\categorie;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventCount = event::count();
        return view('admin.dashboard', compact('eventCount'));
    }

    public function show(Event $event)
    {
        return view('singlePage', compact('event'));
    }

    public function allevent()
    {
        $events = event::all();

        $categories = categorie::all();

        return view('organisateur.event', compact('events', 'categories'));
    }





    public function showUnValidEvents()
    {
        $UnValidEvents = event::where('status', '0')->get();

        return view('admin.validate', compact('UnValidEvents'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function ajouterevent(EventRequest $request)
    {
        event::create($request->validated());
        return redirect()->back();
    }

    public function update(EventRequest $request, $id)
    {


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


    public function validation(Request $request, event $event)
    {

        if (!$event->status) {
            $event->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('success', 'event validated!');
        }

    }

    public function filter(Request $request)
    {
        if ($request->IdCategorie == 'all') {
            $events = Event::where('status', '1')->paginate(3);
        } else {
            $events = Event::where('IdCategory', $request->IdCategorie)->paginate(3);
        }

        $categories = Categorie::all();

        return view('home', compact('events', 'categories'));
    }



    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $events = Event::where('title', 'like', '%' . $searchTerm . '%')->where('status', '1')->paginate(3);
       
       
        $categories = Categorie::all();

        return view('home', compact('events', 'categories'));
    }

}
