<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>update page</h2>

    <ul>
        @foreach($projects as $project)
            <li>{{ $project->project_name }} - <a href="{{ route('projects.edit', $project) }}">Modifier</a> | <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $project->id }}').submit();">Supprimer</a>
                <form id="delete-form-{{ $project->id }}" action="{{ route('projects.destroy', $project) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('projects.create') }}">Ajouter une Tâche</a>
@endsection
