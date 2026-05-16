<?php

namespace App\Http\Controllers;

use App\Models\Mcqs;
use Illuminate\Http\Request;

class McqController extends Controller
{
    //
    function showMCQ(){
        $mcqs = Mcqs::
        return view('Mcqs');
    }
}
