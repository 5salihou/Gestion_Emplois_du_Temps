<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\emplois_du_temps;
use App\Models\creneau;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

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
        if(Gate::allows('access-admin')){
            if(auth()->user()->role !="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }else{
            abort(403,'vous ne pouvez rien modifier');
        }
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
    public function show(creneau $creneau, $id)
    {
        return view('emplois_du_temps.showEmploisDuTemps', ['$id'] , compact('creneau'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(emplois_du_temps $emplois_du_temps, $id)
    {
        if(Gate::allows('access-admin')){
            if(auth()->user()->role !="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }
        if(!Gate::allow('access-admin')){
            abort(403,'vous ne pouvez rien modifier');
        }
        return view('emplois_du_temps.editEmploisDuTemps',['$id'], compact('emplois_du_temps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, emplois_du_temps $emplois_du_temps,$id)
    {
         // Validation
         $request->validate([
            'nom' => 'required'
        ]);

        //modification
        $emplois_du_temps->update($request->all());

        return redirect()->route('emplois_du_temps.index', ['$id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(emplois_du_temps $emplois_du_temps)
    {
        if(Gate::allows('access-admin')){
            if(auth()->user()->role !="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }
        if(!Gate::allow('access-admin')){
            abort(403,'vous ne pouvez rien modifier');
        }
        $emplois_du_temps->delete();
        return redirect()->route('emplois_du_temps.index');
    }
}
