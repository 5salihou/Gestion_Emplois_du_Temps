<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Matiere = matiere::orderBy('id', 'desc')->get();
        return View('matiere.listMatiere', compact('Matiere'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matiere.createMatiere');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'nom' => 'required',
            'sigle' => 'required',
            'domaine' => 'required',
            'duree' => 'required'
        ]);

        // instanciation
        $Matiere = new matiere($request->all());

        // enregistrement
        $Matiere->saveOrFail();

        return redirect()->route('matiere.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(matiere $matiere)
    {
        return view('matiere.showMatiere', compact('matiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matiere $matiere)
    {
        return view('matiere.editMatiere', compact('matiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matiere $matiere)
    {
        // validation
        $request->validate([
            'nom' => 'required',
            'sigle' => 'required',
            'domaine' => 'required',
            'duree' => 'required'
        ]);

        // modification
        $matiere->update($request->all());

        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matiere $matiere)
    {
        $matiere->delete();
        return redirect()->route('matiere.index');
    }
}
