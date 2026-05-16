<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function showLogin(){
        return view('login');
    }

    function login(Request $request){
        return $request->input();
    }

    function showRegister(){
        return view('register');
    }

    function register(Request $request){
        $request->validate([
            'username'=>'rerquired',
            'email'=>'re'
        ])
        return $request->input();
    }
}
