<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Créer un projet</h2>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <label for="project_name">project name :</label>
        <input type="text" name="project_name" required>

        <label for="owner">owner :</label>
        <input type="text" name="owner" required>

        
        <button type="submit">Enregistrer</button>
    </form>
@endsection
