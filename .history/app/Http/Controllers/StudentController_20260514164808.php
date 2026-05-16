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
        if(!Session::has('student')){
            return view('login');
        }
        return redirect('/dashboard');
    }

    function login(Request $request){
        $request->validate([
            'username'=>'required|min:6',
            'password'=>'required|min:6',
        ]);

        $student = Student::where('username',$request->username)->first();
        if($student && Hash::check($request->password,$student->password)){
            Session::put('student',$student);
            return redirect('/dashboard');
        }
    }

    function logout(){
        Session::forget('student');
        return redirect('/login');
    }

    function showRegister(){
        return view('register');
    }

    function register(Request $request){
        $request->validate([
            'username'=>'required|min:6',
            'email'=>'required|email|unique:students',
            'password'=>'required|min:6'
        ]);

        $student = Student::where('email',$request->email);

        if(!$)
        $student->username=$request->username;
        $student->email=$request->email;
        $student->password=Hash::make($request->password);
        if($student->save()){
            Session::put('student',$student);
            return redirect('/dashboard');
        }
        return $request->input();
    }

    function showDashboard()
    {
        if(!Session::has('student')){
            return redirect('/login');
        }
        return view('dashboard');
    }
}
