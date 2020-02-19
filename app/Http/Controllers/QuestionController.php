<?php

namespace App\Http\Controllers;
use App\Questionaire;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create ( Questionaire $questionaire){
        return view('question.create', compact('questionaire'));
    }
}
