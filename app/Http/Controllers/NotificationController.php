<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\sendNewNotification;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications=notification::all();
        return view('notification.show',['notifications'=>$notifications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Gate::allows('access-admin')){
                abort(403,'vous ne pouvez rien modifier');
        }
        return view('notification.createNotification');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notification=notification::all();
        // Validation
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            // 'User_id'=>''
        ]);

        // $notification->user_id=auth()->user()->id;
        // initialisation
        $notification = new notification($request->all());
        $user=['email'=>'as1233@gmail.nm','name'=>'monsieu gd'];
        // Enregistrement
        $notification->saveOrFail();
        Mail::to('test@mail.test')->send(new sendNewNotification($user));
        return redirect()->route('notification.index');
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
        if(Gate::allows('access-admin')){
            if(auth()->user()->role !="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }
        else{
            abort(403,'vous ne pouvez rien modifier');
        }
        $users=User::all();
        return view('notification.reponse',compact('notification','users'));
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