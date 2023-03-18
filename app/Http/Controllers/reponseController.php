<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class reponse extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user_admin)
    {
        $notifications=notification::all();
        return view('notification.show',['notifications'=>$notifications,'user_admin'=>$user_admin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,notification $notif)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'user_id'=>$notif->user_id,
        ]);
        $user_admin=auth()->user();
        // initialisation
        $notification = new notification($request->all());

        // Enregistrement
        $notification->saveOrFail();

        return redirect()->route('notification.index',compact('user_admin'));
    }

    /**
     * Display the specified resource.
     */
}