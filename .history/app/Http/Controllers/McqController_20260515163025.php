<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McqController extends Controller
{
    //
    function showMCQ(){
        $mcqs = Mcq
        return view('Mcqs');
    }
}
