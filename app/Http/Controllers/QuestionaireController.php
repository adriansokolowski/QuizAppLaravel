<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionaireController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('questionaire.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        // $data['user_id'] = auth()->user()->id;

        // $questionaire = \App\Questionaire::create($data);

            $questionaire = auth()->user()->questionaires()->create($data);

        return redirect('/questionaires/'.$questionaire->id);
    }

    public function show(\App\Questionaire $questionaire){
        return view('questionaire.show', compact('questionaire'));
    }
}


