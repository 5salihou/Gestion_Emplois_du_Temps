<?php

namespace App\Http\Controllers;

use App\Models\filiere;
use App\Models\departement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements=departement::all();
        $filieres=filiere::all();
        return view('filiere.liste',compact('filieres','departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Gate::allows('access-admin')){
            abort(403,'vous ne pouvez rien modifier');
        }
        $departements=departement::all();
        return view('filiere.new',compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filiere=filiere::all();
        $filiere->nom =$request->nom;
        $filiere->departement_id=$request->deparement_id;
        $filiere=new filiere($request->all());
        $filiere->saveOrFail();
        return redirect()->route('filiere.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(filiere $filiere)
    {
        if(!Gate::allows('access-admin')){
            abort(403,'vous ne pouvez rien modifier');
        }
        $departements=departement::all();
        return view('filiere.edit',compact('filiere','departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, filiere $filiere)
    {
        $request->validate([
            'nom'=>'required',
            'departement_id'=>'required',
        ]);
        $filiere->updateOrFail($request->all());
        return redirect()->route('filiere.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(filiere $filiere)
    {
        if(!Gate::allows('access-admin')){
            abort(403,'vous ne pouvez rien modifier');
        }
        $filiere->deleteOrFail();
        return redirect()->route('filiere.index');
    }
}