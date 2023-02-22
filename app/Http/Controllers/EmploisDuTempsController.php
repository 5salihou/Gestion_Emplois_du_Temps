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
    public function show(emplois_du_temps $emplois_du_temps): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(emplois_du_temps $emplois_du_temps): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, emplois_du_temps $emplois_du_temps): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(emplois_du_temps $emplois_du_temps): RedirectResponse
    {
        //
    }
}
