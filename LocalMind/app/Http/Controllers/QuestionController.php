<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $questions = Question::latest()->get();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        Question::create($request->validate([
            'title' => 'required',
            'content' => 'required',
            'location' => 'required',
        ]) + ['user_id' => auth()->id()]);

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question) {
        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question) {
        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question) {
        $question->update($request->validate([
            'title' => 'required',
            'content' => 'required',
            'location' => 'required',
        ]));
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question) {
        $question->delete();
        return redirect()->route('questions.index');
    }
}

