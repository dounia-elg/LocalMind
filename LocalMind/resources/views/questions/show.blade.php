@extends('layouts.app')

@section('content')
    <h1>{{ $question->title }}</h1>
    <p>{{ $question->content }}</p>
    <p><strong>Lieu :</strong> {{ $question->location }}</p>

    <h3>Réponses :</h3>
    @foreach ($question->answers as $answer)
        <p>{{ $answer->content }} - <i>{{ $answer->user->name }}</i></p>
    @endforeach

    @auth
        <form action="{{ route('answers.store', $question) }}" method="POST">
            @csrf
            <textarea name="content" required></textarea>
            <button type="submit">Répondre</button>
        </form>
    @endauth
@endsection
