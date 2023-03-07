@extends('layouts.app')

@section('title', 'Détails de la emplois_du_temps: ' . $emplois_du_temps->nom)

@section('content')
        <div class="row">
            <div class="card col-12 col-md-2 mb-3">
                LUNDI
                <div class="card-body">
                    <h4 class="card-title">{{ $emplois_du_temps->nom }}</h4>
                </div>
            </div>
            <div class="card col-12 col-md-2 mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $emplois_du_temps->nom }}</h4>
                </div>
            </div>
            <div class="card col-12 col-md-2 mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $emplois_du_temps->nom }}</h4>
                </div>
            </div>
            <div class="card col-12 col-md-2 mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $emplois_du_temps->nom }}</h4>
                </div>
            </div>
            <div class="card col-12 col-md-2 mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $emplois_du_temps->nom }}</h4>
                </div>
            </div>
            <div class="card col-12 col-md-2 mb-3">
                <div class="card-body">
                    <h4 class="card-title">{{ $emplois_du_temps->nom }}</h4>
                </div>
            </div>
        </div>
@endsection
