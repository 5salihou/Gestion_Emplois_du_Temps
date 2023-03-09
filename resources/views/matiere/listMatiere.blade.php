@extends('layouts.app')

@section('title', 'liste des matieres')

@section('content')
    <div card>
        <div card-body>
            <blockquote class="blockquote mb-0">
                <p>listes des matieres</p>
            </blockquote>
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N*</th>
                            <th scope="col">Nom</th>
                            <th scope="col">SIGLE</th>
                            <th scope="col">DOMAINE</th>
                            <th scope="col">DUREE</th>
                            @if(Gate::allows('access-admin'))
                                @if (auth()->user()->role=="admin")
                                   <th scope="col">Actions</th>
                                @endif
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Matiere as $matiere)
                            <tr class="">
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $matiere->nom }}</td>
                                <td>{{ $matiere->sigle }}</td>
                                <td>{{ $matiere->domaine }}</td>
                                <td>{{ $matiere->duree }}</td>
                                @if(Gate::allows('access-admin'))
                                    @if (auth()->user()->role=="admin")
                                        <td>
                                            <a href="{{ route('matiere.show', compact('matiere')) }}" class="btn btn-primary">Voir</a>
                                            <a href="{{ route('matiere.edit', compact('matiere')) }}" class="btn btn-warning">Editer</a>
                                            <form class="d-inline" action="{{ route('matiere.destroy', compact('matiere')) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    @endif
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('matiere.create') }}" class="btn btn-primary">Nouvelle matiere</a>
        </div>
    </div>
@endsection
