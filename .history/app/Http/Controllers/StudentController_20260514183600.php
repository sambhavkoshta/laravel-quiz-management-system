<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    //
    function showLogin()
    {
        if (!Session::has('student')) {
            return view('login');
        }
        return redirect('/dashboard');
    }

    function login(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:6',
        ]);

        $student = Student::where('username', $request->username)->first();
        if ($student && Hash::check($request->password, $student->password)) {
            Session::put('student', $student);
            Session::flash('loginSuccess','Logged in successfully');
            return redirect('/dashboard');
        }
    }

    function logout()
    {
        Session::forget('student');
        Session::flash('logoutSuccess', 'Logged out successfully');
        return redirect('/login');
    }

    function showRegister()
    {
        if (!Session::has('student')) {
            return view('register');
        }
        return redirect('/dashboard');
    }

    function register(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|min:6|unique:students,username',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|min:6'
        ]);

        if ($validate) {
            $student = new Student();
            $student->username = $request->username;
            $student->email = $request->email;
            $student->password = Hash::make($request->password);
            if ($student->save()) {
                Session::put('student', $student);
                Session::flash('registeredSuccess', 'Registered successfully');
                return redirect('/dashboard');
            }
        }
    }

    function showDashboard()
    {
        if (!Session::has('student')) {
            return redirect('/login');
        }
        return view('dashboard');
    }

    function showEdit($id){
        if (!Session::has('student')) {
            return redirect('/login');
        }
        $student = Student::findOrFail($id);
        return view('edit',compact('student'));
    }

    function edit(Request $request,$id){
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
        ]);
        $student = Student::findOrFail($id);
        $student->username = $request->username;
        $student->email = $request->email;
        $student->save();
        Session::flash('success', 'Profile updated successfully!');
        return redirect('/dashboard');
    }

    function showChangePassword($id){
        if (!Session::has('student')) {
            return redirect('/login');
        }
        $student = Student::findOrFail($id);
        return view('changePassword', compact('student'));
    }

    function changePassword(Request $request,$id){
        $request->validate([
            'currpass'=>'required|min:6',
            'newpass'=>'required|min:6|unique:students,password',
        ]);

        $student = Student::findOrFail($id);
        if(Hash::check($request->currpass,$request->newpass)){
            $student->password = Hash::make($request->newpass);
            if($student->save()){
                Session::flash('success','Password changed successfully');
            }
        }
        return redirect('/dashboard')
    }
}
