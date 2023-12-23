<!-- resources/views/tasks/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Modifier le projet</h2>

    <form action="{{ route('projects.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="project_name">project name</label>
        <input type="text" name="project_name" value="{{ $project->project_name }}" required>

        <label for="owner">"owner</label>
        <textarea name="owner">{{ $project->"owner }}</textarea>

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
