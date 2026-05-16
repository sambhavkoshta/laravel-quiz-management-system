<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    //
    function showQuizzes($id){
        $ca
    }

    function showCategories(){
        $categories = Category::get();
        return view('studentCategories',compact('categories'));
    }
}
