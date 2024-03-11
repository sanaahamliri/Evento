<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\categorie;
use App\Models\client;
use App\Models\event;
use App\Models\organisator;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorieCount = Categorie::count();
        $eventCount = event::count();
        $reservationCount = Reservation::count();
        $organizerCount = organisator::count();
        $clientCount = client::count();
        $userCount = User::count();

        return view('admin.dashboard', compact('categorieCount', 'eventCount', 'reservationCount', 'organizerCount', 'clientCount', 'userCount'));
    }

    public function allcategorie()
    {
        $categories = categorie::all();
       
        return view('admin.categorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajoutercategorie(CategorieRequest $request)
    {
        
        Categorie::create([
            'categorieName' => $request->categorieName,
        ]);
        return redirect()->back();
    }

    public function update(CategorieRequest $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->update([
            'categorieName' => $request->categorieName,
        ]);

        return redirect()->back(); 
    }

    public function destroy($id)
    {
        $categorie = categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->back();
    }
}
