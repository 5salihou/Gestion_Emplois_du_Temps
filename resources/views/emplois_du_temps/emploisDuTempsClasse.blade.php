laravel///
@extends('layouts.app')

@section('title', 'liste des emplois_du_temps')

@section('content')
    <div card>
        <div card-body>

            @foreach ($creneaus as $creneau)
                {{-- @foreach ($classes as $classe)
                    <blockquote class="blockquote mb-0">
                        <p class="alert alert-primary">Emploi du temps de @if ($creneau->classe_id == $classe->id){{$classe->nom}}@endif</p>
                    </blockquote>
                @endforeach --}}
                <div class="table-responsive">

                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">horaire</th>
                                <th scope="col">Lundi</th>
                                <th scope="col">Mardi</th>
                                <th scope="col">mercredi</th>
                                <th scope="col">jeudi</th>
                                <th scope="col">vendredi</th>
                                <th scope="col">samedi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">08:00/12:00</td>
                                <td>
                                    @if ($creneau->heure_debut >= 8)
                                        @if ($creneau->jour == 'Lundi')
                                            @foreach ($classes as $classe)
                                                @if ($creneau->classe_id == $classe->id)
                                                    @foreach ($matieres as $matiere)
                                                        @if ($creneau->matiere_id == $matiere->id)
                                                            {{ $matiere->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($salles as $salle)
                                                        @if ($creneau->salle_id == $salle->id)
                                                            {{ $salle->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($type_interventions as $type_intervention)
                                                        @if ($creneau->type_intervention_id == $type_intervention->id)
                                                            {{ $type_intervention->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($users as $user)
                                                        @if ($creneau->user_id == $user->id)
                                                            {{ $user->name }} <br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif

                                </td>
                                <td>

                                    @if ($creneau->heure_debut >= 8)
                                        @if ($creneau->jour == 'Mardi')
                                            @foreach ($classes as $classe)
                                                @if ($creneau->classe_id == $classe->id)
                                                    @foreach ($matieres as $matiere)
                                                        @if ($creneau->matiere_id == $matiere->id)
                                                            {{ $matiere->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($salles as $salle)
                                                        @if ($creneau->salle_id == $salle->id)
                                                            {{ $salle->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($type_interventions as $type_intervention)
                                                        @if ($creneau->type_intervention_id == $type_intervention->id)
                                                            {{ $type_intervention->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($users as $user)
                                                        @if ($creneau->user_id == $user->id)
                                                            {{ $user->name }} <br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </td>
                                <td>

                                    @if ($creneau->heure_debut >= 8)
                                        @if ($creneau->jour == 'Mercredi')
                                            @foreach ($classes as $classe)
                                                @if ($creneau->classe_id == $classe->id)
                                                    @foreach ($matieres as $matiere)
                                                        @if ($creneau->matiere_id == $matiere->id)
                                                            {{ $matiere->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($salles as $salle)
                                                        @if ($creneau->salle_id == $salle->id)
                                                            {{ $salle->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($type_interventions as $type_intervention)
                                                        @if ($creneau->type_intervention_id == $type_intervention->id)
                                                            {{ $type_intervention->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($users as $user)
                                                        @if ($creneau->user_id == $user->id)
                                                            {{ $user->name }} <br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if ($creneau->heure_debut >= 8)
                                        @if ($creneau->jour == 'Jeudi')
                                            @foreach ($classes as $classe)
                                                @if ($creneau->classe_id == $classe->id)
                                                    @foreach ($matieres as $matiere)
                                                        @if ($creneau->matiere_id == $matiere->id)
                                                            {{ $matiere->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($salles as $salle)
                                                        @if ($creneau->salle_id == $salle->id)
                                                            {{ $salle->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($type_interventions as $type_intervention)
                                                        @if ($creneau->type_intervention_id == $type_intervention->id)
                                                            {{ $type_intervention->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($users as $user)
                                                        @if ($creneau->user_id == $user->id)
                                                            {{ $user->name }} <br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </td>
                                <td>

                                    @if ($creneau->heure_debut >= 8)
                                        @if ($creneau->jour == 'Vendredi')
                                            @foreach ($classes as $classe)
                                                @if ($creneau->classe_id == $classe->id)
                                                    @foreach ($matieres as $matiere)
                                                        @if ($creneau->matiere_id == $matiere->id)
                                                            {{ $matiere->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($salles as $salle)
                                                        @if ($creneau->salle_id == $salle->id)
                                                            {{ $salle->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($type_interventions as $type_intervention)
                                                        @if ($creneau->type_intervention_id == $type_intervention->id)
                                                            {{ $type_intervention->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($users as $user)
                                                        @if ($creneau->user_id == $user->id)
                                                            {{ $user->name }} <br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if ($creneau->heure_debut >= 8)
                                        @if ($creneau->jour === 'samedi')
                                            @foreach (classes as $classe)
                                                @if ($creneau->classe_id == $classe->id)
                                                    @foreach ($matieres as $matiere)
                                                        @if ($creneau->matiere_id == $matiere->id)
                                                            {{ $matiere->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($salles as $salle)
                                                        @if ($creneau->salle_id == $salle->id)
                                                            {{ $salle->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($type_interventions as $type_intervention)
                                                        @if ($creneau->type_intervention_id == $type_intervention->id)
                                                            {{ $type_intervention->nom }} <br>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($users as $user)
                                                        @if ($creneau->user_id == $user->id)
                                                            {{ $user->name }} <br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>
@endsection
