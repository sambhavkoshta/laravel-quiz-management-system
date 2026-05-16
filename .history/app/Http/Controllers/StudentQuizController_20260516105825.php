<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    //
    function showQuizzes($id){
        $category = Category::findOrFail($id);
        $quizzes = $category->quizzes;
        return view('studentQuizzes',compact('quizzes'));
    }

    function showCategories(){
        $categories = Category::get();
        return view('studentCategories',compact('categories'));
    }
}
