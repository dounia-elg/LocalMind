@extends('layouts.app')

@section('content')
    <h1>Questions</h1>
    @foreach ($questions as $question)
        <div>
            <h2><a href="{{ route('questions.show', $question) }}">{{ $question->title }}</a></h2>
            <p>{{ $question->content }}</p>
        </div>
    @endforeach
@endsection
