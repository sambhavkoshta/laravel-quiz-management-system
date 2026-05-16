<?php

namespace App\Http\Controllers;

use App\Models\Mcqs;
use App\Models\Quiz;
use Illuminate\Http\Request;

class McqController extends Controller
{
    //
    function showMCQ($id){
        $mcqs = Mcqs::all();
        $quiz = Quiz::findOrFail($id);
        return view('Mcqs',compact('mcqs','quiz'));
    }

    function addMCQ(Request $request,$id){
        $request->validate([
            'question'=> 'required|min:6|unique:mcqs,question',
            'option_a'=>'required|min:3',
            'option_b'=>'required|min:3',
            'option_c'=>'required|min:3',
            'option_d'=>'required|min:3',
            'correct_answer'=>'required|min:3',
            'quiz_id'=>'required|exists:quizzes,id'
        ]);

        $quiz = Quiz::findOrFail($id);
        $mcq = new Mcqs();
        $mcq->question =$request->question;
        $mcq->option_a =$request->option_a;
        $mcq->option_b =$request->option_b;
        $mcq->option_c =$request->option_c;
        $mcq->option_d =$request->option_d;
        $mcq->correct_answer =$request->correct_answer;
        $mcq->quiz_id =$request->question;

    }
}
