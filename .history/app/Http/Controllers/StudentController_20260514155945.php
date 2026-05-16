<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
            'username'=>'required|min:6',
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $student = new Student();
        $student->username=$request->username;
        $student->email=$request->email;
        $student->password=Hash::make('$request->passwprd');
        if($student->save()){
            Session::put('student',$student);
            return redirect('/das')
        }
        return $request->input();
    }
}
