<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    function showQuiz(){
        $quizzes = Quiz::get();
        $category = Category::get()
        return view('quizzes',compact('quizzes'));
    }
    function addQuiz(Request $request){
        $request->validate([
            'name'=>'required|min:5|unique:quizzes,name',
        ]);

        $quiz = new Quiz();
        $quiz->name = $request->name;
    }
    function showEdit(){

    }
    function updateQuiz(){

    }
    function deleteQuiz(){

    }
}
