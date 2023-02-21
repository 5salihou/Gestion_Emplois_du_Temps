<?php

namespace App\Http\Controllers;

use App\Models\salle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(salle $salle): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(salle $salle): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, salle $salle): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(salle $salle): RedirectResponse
    {
        //
    }
}
