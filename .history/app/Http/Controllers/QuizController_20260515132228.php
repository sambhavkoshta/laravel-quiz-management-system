<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    function showQuiz(){
        $quizzez = Quiz::get();
        return view('quizzes',compact('qui'))
    }
    function addQuiz(){

    }
    function showEdit(){

    }
    function updateQuiz(){

    }
    function deleteQuiz(){

    }
}
