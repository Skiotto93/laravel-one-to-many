@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-3">
            <span>
                <strong>Nome Progetto:</strong> {{$project->name}}
            </span>
            <p class="my-3">
                <strong>Descrizione: </strong>{{$project->description}}
            </p>
        </div>
        <div>
            @if ($project->cover_image)
            <div>
                <strong>Immagine: </strong>
            </div>
            <div class="d-flex justify-content-center">
                <img class="my-4 img-thumbnail img-fluid" src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->name}}">
            </div>
            @endif
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla Dashboard</a>
        </div>
    </div>
@endsection