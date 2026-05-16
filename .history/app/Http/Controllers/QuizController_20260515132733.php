<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    function showQuiz(){
        $quizzes = Quiz::get();
        return view('quizzes',compact('quizzes'));
    }
    function addQuiz(Request $request){
        $request->validate([
            'name'=>'required|min:5|unique:quizzes,name'
        ])
    }
    function showEdit(){

    }
    function updateQuiz(){

    }
    function deleteQuiz(){

    }
}
