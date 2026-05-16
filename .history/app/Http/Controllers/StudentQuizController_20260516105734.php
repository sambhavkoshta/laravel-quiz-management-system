<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    //
    function showQuizzes($id){
        $category = Category::findOrFail($id);
        $qui
    }

    function showCategories(){
        $categories = Category::get();
        return view('studentCategories',compact('categories'));
    }
}
