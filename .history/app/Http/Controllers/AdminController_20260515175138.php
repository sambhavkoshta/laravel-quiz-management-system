<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    function showAdminLogin(){
        if(!Session::has('admin')){
            return view('adminLogin');
        }
        return redirect('/admin-dashboard');
    }

    function adminLogin(Request $request){
        $request->validate([
            'username'=>'required|min:5',
            'password'=>'required|min:6',
        ]);

        $admin =Admin::where('username',$request->username)->first();
        if($admin && Hash::check($request->password,$admin->password)){
            Session::put('admin',$admin);
            Session::flash('loginSuccess','Admin logged in successfully.');
            return redirect('/admin-dashboard');
        }
    }

    function showAdminRegister(){
        if(!Session::has('student')){
            return view('adminRegister');
        }
        return redirect('/admin-dashboard');
    }

    function adminRegister(Request $request){
        $request->validate([
            'username'=>'required|min:5|unique:admins,username',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|min:6',
        ]);

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);

        if($admin->save()){
            Session::put('admin',$admin);
            Session::flash('success',"Logged in successfully.");
            return redirect('/admin-dashboard');
        }
    }

    function showAdminDashboard(){
        $student = Student::get();
        $categories 
        return view('adminDashboard',compact('student'));
    }

    function adminLogout(){
        Session::forget('admin');
        return redirect('/admin-login');
    }
}
