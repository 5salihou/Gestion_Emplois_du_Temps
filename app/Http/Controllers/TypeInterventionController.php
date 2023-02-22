<?php

namespace App\Http\Controllers;

use App\Models\type_intervention;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TypeInterventionController extends Controller
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
    public function show(type_intervention $type_intervention): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type_intervention $type_intervention): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, type_intervention $type_intervention): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type_intervention $type_intervention): RedirectResponse
    {
        //
    }
}
