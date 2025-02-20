<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggle(Question $question) {
        auth()->user()->favorites()->toggle($question->id);
        return back();
    }
}



