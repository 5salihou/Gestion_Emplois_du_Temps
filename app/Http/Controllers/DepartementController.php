<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $guarded = ['id'];


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
    public function show(departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departement $departement)
    {
        //
    }
}