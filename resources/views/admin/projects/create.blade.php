@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Crea un nuovo Progetto</h1>
        {{-- Condizione Error --}}
        @include('commons.error')
            
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="name_client" class="form-label">Nome Cliente:</label>
                <input type="text" class="form-control" id="name" name="name_client" value="{{ old('name_client') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" name="description" rows="5" >{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine:</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image" value="{{ old('cover_image') }}">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>
        </form>
    </div>
@endsection