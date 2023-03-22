@extends('layouts.app')

@section('title', 'creation de emploi_du_temps')

@section('content')
    <div class="container">
        <div class="row g-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulaire d'ajout d'une emploi_du_temps</h4>
                        <form action="{{ route('emplois_du_temps.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="classe_id" class="form-label">Selection classe</label>
                                        <select class="form-control" name="classe_id">
                                            @foreach ($classes as $classe)
                                                    <option selected value="{{$classe->id}}">{{$classe->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Vider</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
