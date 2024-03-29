<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservationCount = Reservation::count();
        $NotAccepetedreservationCount = Reservation::where('status', '0')->count();
        $AccepetedreservationCount = Reservation::where('status', '1')->count();

        return view('organisateur.dashboard', compact('reservationCount', 'AccepetedreservationCount', 'NotAccepetedreservationCount'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request, event $event)
    {

        $data = $request->validated();
        if ($event->ReservationStatus) {
            $data['status'] = true;
            Reservation::create($data);
            $event->update([
                'place_number' => ($event->place_number - 1),
            ]);
            return redirect()->back()->with('success', 'booked successefully!');
        } else {
            $data['status'] = false;
            Reservation::create($data);
            $event->update([
                'place_number' => ($event->place_number - 1),
            ]);
            return redirect()->back()->with('success', 'booked successefully  you should wait the organizer accept your reservation!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    public function showEventReservations()
    {
        $reservations = Reservation::where('status', 0)
            ->get();
        return view('organisateur.reservation', compact('reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation, Request $request)
    {
        $reservation->delete();

        $event = Event::find($request->event);

        $event->update([
            'place_number' => ($event->place_number + 1),
        ]);

        return redirect()->back()->with('success', 'reservation deleted!');
    }

    public function acceptReservation(Reservation $reservation)
    {
        $reservation->update([
            'status' => '1'
        ]);

        return redirect()->back()->with('success', 'Reservation accepted!');
    }
    public function showTicket(Reservation $events)
    {
        $id = Auth::user()->clients->id;
        $reservation =  Reservation::where('clientID', $id)
            ->get();
        return view('ticket', compact('reservation'));
    }
}
