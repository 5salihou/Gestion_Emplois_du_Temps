<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\salle;
use App\Models\classe;
use App\Models\creneau;
use App\Models\matiere;
use Illuminate\Http\Request;
use App\Models\type_intervention;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CreneauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matieres=matiere::all();
        $salles=salle::all();
        $type_interventions=type_intervention::all();
        $users=User::all();
        $creneaus=creneau::all();
        $classes=classe::all();
        return view('creneau.liste',[
            'users'=>$users,
            'classes'=>$classes,
            'matieres'=>$matieres,
            'salles'=>$salles,
            'type_interventions'=>$type_interventions,
            'creneaus'=>$creneaus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Gate::allows('access-admin')){
            if(auth()->user()->role !="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }
        else{
            abort(403,'vous ne pouvez rien modifier');
        }
        $matieres=matiere::all();
        $salles=salle::all();
        $type_interventions=type_intervention::all();
        $users=User::all();
        $classes=classe::all();
        $creneaus=creneau::all();
        return view('creneau.new',[
            'users'=>$users,
            'classes'=>$classes,
            'matieres'=>$matieres,
            'salles'=>$salles,
            'type_interventions'=>$type_interventions,
            'creneaus'=>$creneaus,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $creneaus=creneau::all();
        $a=1;
        foreach($creneaus as $creneau)
        {
            if($creneau->jour == strval($request->jour))
            {
                if($creneau->heure_debut == $request->heure_debut){
                    if( $creneau->salle_id == $request->salle_id){
                        $a=0;
                    break;
                    }
                    else if( $creneau->classe_id == $request->classe_id)
                    {
                        $a=0;
                        break;
                    }
                    else if($creneau->user_id == $request->user_id){
                        $a=0;
                    break;
                    }
                    else{
                        $a=1;
                    }
                    $a=1;
                }
            }else if($creneau->heure_debut >= $request->heure_fin){
                $a=0;
                break;
            }
            else{
                $a=1;
            }
            if($request->heure_debut+$request->heure_fin >4){
                $a=0;
                break;
            }
            else{
                $a=1;
            }
        }
        if($a==1){
        $creneaus->jour =$request->jour;
        $creneaus->heure_debut =$request->heure_debut;
        $creneaus->heure_fin =$request->heure_fin;
        $creneaus->salle_id=$request->salle_id;
        $creneaus->matiere_id=$request->matiere_id;
        $creneaus->classe_id=$request->classe_id;
        $creneaus->user_id=$request->user_id;
        $creneaus->type_intervention_id=$request->type_intervention_id;
        $creneaus=new creneau($request->all());
        $creneaus->saveOrFail();
        }
        else
        {
            return back()->withErrors([
                'alert' => "erreur de redondance ou l'heure debut est > = heure fin",
            ]);
        }
        return redirect()->route('creneau.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(creneau $creneau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(creneau $creneau)
    {
        if(Gate::allows('access-admin')){
            if(auth()->user()->role !="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }
        else{
            abort(403,'vous ne pouvez rien modifier');
        }
        $matieres=matiere::all();
        $salles=salle::all();
        $type_interventions=type_intervention::all();
        $users=User::all();
        $classes=classe::all();
        return view('creneau.new',[
            'users'=>$users,
            'classes'=>$classes,
            'matieres'=>$matieres,
            'salles'=>$salles,
            'type_interventions'=>$type_interventions,
            'creneau'=>$creneau
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, creneau $creneau)
    {
        $request->validate([
            'jour' => 'required,' . $creneau->id,
            'heure_debut' => 'require' . $creneau->id,
            'heure_fin|unique:Users,password,' . $creneau->id,
            'sale_id' => 'required' . $creneau->id,
            'matiere_id' => 'required' . $creneau->id,
            'user_id' => 'required' . $creneau->id,
            'classe_id' => 'required' . $creneau->id,
            'type_intervention_id' => 'required' . $creneau->id,
        ]);
        $creneau->updateOrFail($request->all());
        return redirect()->route('creneau.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(creneau $creneau)
    {
        if(Gate::allows('access-admin')){
            if(auth()->user()->role!="admin"){
                abort(403,'vous ne pouvez rien modifier');
            }
        }
        else{
            abort(403,'vous ne pouvez rien modifier');
        }
        $creneau->deleteOrFail();
        return redirect()->route('creneau.index');
    }
}
