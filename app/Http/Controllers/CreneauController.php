<?php

namespace App\Http\Controllers;

use App\Models\creneau;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreneauController extends Controller
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
    public function show(creneau $creneau): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(creneau $creneau): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, creneau $creneau): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(creneau $creneau): RedirectResponse
    {
        //
    }
}
