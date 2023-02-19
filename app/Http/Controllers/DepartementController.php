<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DepartementController extends Controller
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
    public function show(departement $departement): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departement $departement): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departement $departement): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departement $departement): RedirectResponse
    {
        //
    }
}
