<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    //
    function showQuizzes($id){
        $category = Category::find($id);
        $quizzes = $category->quizzes;
        return view('studentQuizzes',compact('quizzes','category'));
    }

    function showCategories(){
        $categories = Category::get();
        return view('studentCategories',compact('categories'));
    }

    function startQuiz($id){
        $quiz = Quiz::findOrFail($id);
        $mcqs = 
    }
}
