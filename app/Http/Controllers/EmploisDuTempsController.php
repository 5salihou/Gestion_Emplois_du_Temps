<?php

namespace App\Http\Controllers;

use App\Models\emplois_du_temps;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmploisDuTempsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emplois_du_temps = emplois_du_temps::orderBy('id', 'desc')->get();
        return view('emplois_du_temps.listEmploisDuTemps', compact('emplois_du_temps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emplois_du_temps.createEmploisDuTemps');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'nom' => 'required'
        ]);

        //initialisation
        $emplois_du_temps = new emplois_du_temps($request->all());

        // enregistrement
        $emplois_du_temps->saveOrFail();

        return redirect()->route('emplois_du_temps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(emplois_du_temps $emplois_du_temps, $id)
    {
        return view('emplois_du_temps.showEmploisDuTemps', ['$id'] , compact('emplois_du_temps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(emplois_du_temps $emplois_du_temps)
    {
        return view('emplois_du_temps.editEmploisDuTemps', compact('emplois_du_temps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, emplois_du_temps $emplois_du_temps)
    {
         // Validation
         $request->validate([
            'nom' => 'required'
        ]);

        //modification
        $emplois_du_temps->update($request->all());

        return redirect()->route('emplois_du_temps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(emplois_du_temps $emplois_du_temps)
    {
        $emplois_du_temps->delete();
        return redirect()->route('emplois_du_temps.index');
    }
}
