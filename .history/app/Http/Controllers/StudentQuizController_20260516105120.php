<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StudentQuizController extends Controller
{
    //
    function showQuizzes(){

    }

    function showCategories(){
        $categories = Category::get();
        return view('studentCate')
    }
}
