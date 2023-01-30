@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Modifica {{ $project->name }}</h1>
        {{-- Condizione Error --}}
        @include('commons.error')
            
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
            </div>
            <div class="mb-3">
                <label for="name_client" class="form-label">Nome Cliente:</label>
                <input type="text" class="form-control" id="name" name="name_client" value="{{ old('name_client', $project->name_client) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" name="description" rows="5" >{{ old('description', $project->description) }}</textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning">Modifica</button>
            </div>
        </form>
    </div>
@endsection