<?php

namespace App\Http\Controllers;
use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorieCount = Categorie::count();
        return view('admin.dashboard', compact('categorieCount'));
    }

    public function allcategorie()
    {
        $categories = categorie::all();
       
        return view('admin.categorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajoutercategorie(Request $request)
    {
        $request->validate([
            'categorieName' => 'required',
        ]);
        Categorie::create([
            'categorieName' => $request->categorieName,
        ]);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categorieName' => 'required',
        ]);

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
