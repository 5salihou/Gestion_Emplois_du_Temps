<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('notification.createNotification');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notification.createNotification');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        // initialisation
        $notification = new notification($request->all());

        // Enregistrement
        $notification->saveOrFail();

        return redirect()->route('notification.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notification $notification)
    {
        //
    }
}
