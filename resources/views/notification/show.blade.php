@extends('layouts.app')
@section('titre')
lister des notifications
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p class="alert alert-primary">Liste des notification</p>
            </blockquote>
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date du message</th>
                            @if(Gate::allows('access-admin'))
                                @if(auth()->user()->role=="admin")
                                <th scope="col">Actions</th>
                                @endif
                            @endif
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($notifications as $notification)
                        <tr class="">
                            <td scope="row">{{$loop->index+1}}</td>
                            <td>{{ $notification->titre }}</td>
                            <td>{{ $notification->description}}</td>
                            <td>{{ $notification->created_at}}</td>
                            @if(Gate::allows('access-admin'))
                                @if(auth()->user()->id==$notification->user_id)
                                    <td>
                                        <form class="d-inline" action="{{ route('notification.destroy', compact('notification')) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                @endif
                                <td>
                                    @if (auth()->user()->role=="admin")
                                      <a href="{{route('notification.edit',compact('notification'))}}" class="btn btn-warning">reponse</a>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if(Gate::allows('access-admin'))
                <a href="{{ route('notification.create') }}" class="btn btn-primary my-3">Nouvelle notification</a>
            @endif
        </div>
        </div>
    </div>
</div>
@endsection
