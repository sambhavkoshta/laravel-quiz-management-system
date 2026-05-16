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
        $categories = Category::get();
        return view('quizzes',compact('quizzes', 'categories'));
    }
    function addQuiz(Request $request){
        $request->validate([
            'name'=>'required|min:5|unique:quizzes,name',
        ]);

        $quiz = new Quiz();
        $quiz->name = $request->name;
        $quiz->category_id = $request->category_id;

        if($quiz->save()){
            return redirect('/')
        }
    }
    function showEdit(){

    }
    function updateQuiz(){

    }
    function deleteQuiz(){

    }
}
