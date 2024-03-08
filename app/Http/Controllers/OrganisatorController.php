<?php

namespace App\Http\Controllers;

use App\Models\organisator;
use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(organisator $organisator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(organisator $organisator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, organisator $organisator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(organisator $organisator)
    {
        //
    }

    public function ban(organisator $organisator)
    {
        if (!$organisator->status) {
            $organisator->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('success', 'user Banned!');
        }else {
            $organisator->update([
                'status' => 0,
            ]);
            return redirect()->back()->with('success', 'user Unbanned!');
        }
    }
}
