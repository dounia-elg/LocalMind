@extends('layouts.app')

@section('content')
    <h1>Créer une Question</h1>
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titre" required>
        <textarea name="content" placeholder="Contenu" required></textarea>
        <input type="text" name="location" placeholder="Lieu" required>
        <button type="submit">Publier</button>
    </form>
@endsection
