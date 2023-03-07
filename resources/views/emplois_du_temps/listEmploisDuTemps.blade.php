@extends('layouts.app')

@section('title', 'liste des emplois_du_temps')

@section('content')
    <div card>
        <div card-body>
            @foreach ($emplois_du_temps as $emplois_du_temps)
                {{-- {{ $emplois_du_temps->nom }} --}}
                <a href="{{ route('emplois_du_temps.show', $emplois_du_temps->id, compact('emplois_du_temps')) }}" class="btn btn-danger">{{ $emplois_du_temps->nom }}</a>
            @endforeach
            <hr>
            <a href="{{ route('emplois_du_temps.create') }}" class="btn btn-primary">Nouvelle emplois_du_temps</a>
        </div>
    </div>
@endsection
