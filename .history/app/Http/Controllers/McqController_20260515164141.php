<?php

namespace App\Http\Controllers;

use App\Models\Mcqs;
use Illuminate\Http\Request;

class McqController extends Controller
{
    //
    function showMCQ(){
        $mcqs = Mcqs::all();
        return view('Mcqs',compact('mcqs'));
    }

    function addMCQ(Request $request){
        $request->validate([
            'question'=> 'required|min:6|unique:mcqs,question',
            'option_a'=>'required|min:3',
            'option_b'=>'required|min:3',
            'option_c'=>'required|min:3',
            'option_d'=>'required|min:3',
            'correct_answer'=>'required|min:3',
        ]);
    }
}
